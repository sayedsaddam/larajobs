<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@doe.com'
        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Sr. Software Engineer',
        //     'tags' => 'laravel, php, javascript',
        //     'company' => 'AH Group',
        //     'location' => 'Islamabad, PK',
        //     'email' => 'info@example.com',
        //     'website' => 'https://ahgroup-pk.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur aliquid beatae molestias, animi laborum harum. Optio facere consequatur ea numquam, maiores, tempora eos praesentium, odio assumenda commodi ipsum ut.'
        // ]);
        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'javascript, nodejs, mongodb',
        //     'company' => 'AH Group',
        //     'location' => 'Islamabad, PK',
        //     'email' => 'info@example.com',
        //     'website' => 'https://ahgroup-pk.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur aliquid beatae molestias, animi laborum harum. Optio facere consequatur ea numquam, maiores, tempora eos praesentium, odio assumenda commodi ipsum ut.'
        // ]);
    }
}
