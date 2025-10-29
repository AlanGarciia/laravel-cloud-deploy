<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    }

    private function seedUsers(){

		$user = User::create([
			'name' => 'Admin',
			'email' => 'admin@admin.cat',
			'password' => bcrypt('admin1234')
		]);
	}
}
