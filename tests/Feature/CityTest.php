<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CityTest extends TestCase
{
    use DatabaseMigrations;

    private $admin;
    private $classname;

    const TITLE_FOR_UPDATE = 'Updated title';
    const DB_TABLE_NAME = 'cities';
    const URL = 'admin/cities';
    const CLASSNAME = City::class;

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
    public function testAdminCanCreateNewCity()
    {
        $countryOne = Country::first();
        $categories = Category::factory(10)->create();
        $posts = Post::factory(10)->create();
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        $entityCount = $this->classname::all()->count();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->make();
        $entity->country_id = $countryOne->id;
        $response = $this->post(self::URL, $entity->toArray());
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals($entityCount + 1, $this->classname::all()->count());
    }
    public function testAdminCanUpdateCity()
    {
        //$countries = Country::factory(10)->create();
        $categories = Category::factory(10)->create();
        $posts = Post::factory(10)->create();
        Schema::disableForeignKeyConstraints();
        $this->classname::truncate();
        Schema::enableForeignKeyConstraints();
        $this->actingAs($this->admin);
        $entity = $this->classname::factory()->create();
        $entity->name_sk = self::TITLE_FOR_UPDATE;
        $response = $this->put(self::URL . '/' . $entity->id, $entity->toArray());
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas(self::DB_TABLE_NAME, ['id' => $entity->id, 'name_sk' => self::TITLE_FOR_UPDATE]);

    }
    public function testAdminCanDeleteCity()
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
