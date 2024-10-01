<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class LessonTest extends TestCase
{
    use DatabaseMigrations;

    private $admin;
    private $classname;

    const TITLE_FOR_UPDATE = 'Updated title';
    const DB_TABLE_NAME = 'lessons';
    const URL = 'admin/lessons';
    const CLASSNAME = Lesson::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->admin = User::find(1);
        $this->classname = self::CLASSNAME;
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestCantSeeAdminZone()
    {
        $response = $this->get(self::URL);
        $response->assertRedirect('/login');
    }
    public function testAdminCanCreateNewLesson()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        Course::factory()->count(10)->create();
        $entityCount = $this->classname::all()->count();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->make();
        $response = $this->post(self::URL, $entity->toArray());
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals($entityCount + 1, $this->classname::all()->count());
    }
    public function testAdminCanUpdateLesson()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        Course::factory()->count(10)->create();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $entity->description = self::TITLE_FOR_UPDATE;
        $this->put(self::URL . '/' . $entity->id, $entity->toArray());
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id, 'description' => self::TITLE_FOR_UPDATE]);

    }
    public function testAdminCanDeleteLesson()
    {
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id]);
        $this->delete(self::URL . '/' . $entity->id);
        Schema::enableForeignKeyConstraints();
        $this->assertDatabaseMissing(self::DB_TABLE_NAME, ['id' => $entity->id]);
    }
}
