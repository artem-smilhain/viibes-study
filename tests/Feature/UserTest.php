<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\CreatesApplication;
use Tests\TestCase;

class UserTest extends TestCase
{
    use CreatesApplication;
    use DatabaseMigrations;
    use RefreshDatabase;

    private $admin;
    private $classname;

    const TITLE_FOR_UPDATE = 'Updated title';
    const DB_TABLE_NAME = 'users';
    const URL = 'admin/users';
    const CLASSNAME = User::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->admin = User::find(1);
        $this->classname = self::CLASSNAME;

    }
    public function testGuestCantSeeAdminZone()
    {
        $response = $this->get(self::URL);
        $response->assertRedirect('/login');
    }
    public function testAdminCanCreateNewUser()
    {
        $entityCount = $this->classname::all()->count();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->make();
        $this->withoutExceptionHandling();
        $entity->makeVisible(['password']);
        $entity->role_id = 2; //entolee
        $this->post(self::URL, $entity->toArray());
        $this->assertEquals($entityCount + 1, $this->classname::all()->count());
    }

    public function testAdminCanUpdateUser()
    {
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $entity->makeVisible(['password']);
        $entity->name = self::TITLE_FOR_UPDATE;
        $entity->role_id = 2; //enrolee
        $this->put(self::URL . '/' . $entity->id, $entity->toArray());
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id, 'name' => self::TITLE_FOR_UPDATE]);
    }
    public function testAdminCanDeleteUser()
    {
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id]);
        $response = $this->delete(self::URL . '/' . $entity->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseMissing(self::DB_TABLE_NAME, ['id' => $entity->id]);
    }
}
