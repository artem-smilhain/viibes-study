<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;
    private $admin;
    private $classname;

    const TITLE_FOR_UPDATE = 'Updated title';
    const DB_TABLE_NAME = 'categories';
    const URL = 'admin/categories';
    const CLASSNAME = Category::class;

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
    public function testAdminCanCreateNewCategory()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        $entityCount = $this->classname::all()->count();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->make();
        $response = $this->post(self::URL, $entity->toArray());
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals($entityCount + 1, $this->classname::all()->count());
    }
    public function testAdminCanUpdateCategory()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $entity->name = self::TITLE_FOR_UPDATE;
        $response = $this->put(self::URL . '/' . $entity->id, $entity->toArray());
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id, 'name' => self::TITLE_FOR_UPDATE]);

    }
    public function testAdminCanDeleteCategory()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id]);
        $response = $this->delete(self::URL . '/' . $entity->id);
        $this->assertEquals(302, $response->getStatusCode());
        Schema::enableForeignKeyConstraints();
        $this->assertDatabaseMissing(self::DB_TABLE_NAME, ['id' => $entity->id]);
    }
}
