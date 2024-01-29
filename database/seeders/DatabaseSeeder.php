<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Location;
use App\Models\Major;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        Location::create([
            'location_name' => 'Depok',
            'status' => 1
        ]
        );

        Location::create([
            'location_name' => 'Kalimalang',
            'status' => 1
        ]);

        Major::create([
            'major_name' => 'Informatika',
            'status' => 1
        ]);

        Major::create([
            'major_name' => 'Sistem Informasi',
            'status' => 1
        ]);

        Position::create([
            'position_name' => 'Programmer',
            'status' => 1
        ]);
    }
}
