<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\MockObject\Builder\Stub;

use function Pest\Laravel\seed;

class DatabaseSeeder extends Seeder
{

    private function seedUsers(){

		$user = User::create([
			'name' => 'Admin',
			'email' => 'admin@admin.cat',
			'password' => bcrypt('admin1234')
		]);
	}
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Student::factory(10)->create();

        self::seedUsers();
       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
