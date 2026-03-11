<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);


        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //Listing::factory(4)->create();
        Listing::insert(
            [
                [
                    'title' => 'Laravel Senior Developer', 
                    'user_id' => $user->id,
                    'tags' => 'laravel, javascript',
                    'company' => 'Acme Corp',
                    'location' => 'Boston, MA',
                    'email' => 'email1@email.com',
                    'website' => 'https://www.acme.com',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
                ],
                [
                    'title' => 'Full-Stack Engineer',
                    'user_id' => $user->id,
                    'tags' => 'laravel, backend ,api',
                    'company' => 'Stark Industries',
                    'location' => 'New York, NY',
                    'email' => 'email2@email.com',
                    'website' => 'https://www.starkindustries.com',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
                ],
                [
                    'title' => 'Laravel Developer', 
                    'user_id' => $user->id,
                    'tags' => 'laravel, vue, javascript',
                    'company' => 'Wayne Enterprises',
                    'location' => 'Gotham, NY',
                    'email' => 'email3@email.com',
                    'website' => 'https://www.wayneenterprises.com',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
                ],
                [
                    'title' => 'Backend Developer', 
                    'user_id' => $user->id,
                    'tags' => 'laravel, php, api',
                    'company' => 'Skynet Systems',
                    'location' => 'Newark, NJ',
                    'email' => 'email4@email.com',
                    'website' => 'https://www.skynet.com',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
                ],
                [
                    'title' => 'Junior Developer', 
                    'user_id' => $user->id,
                    'tags' => 'laravel, php, javascript',
                    'company' => 'Wonka Industries',
                    'location' => 'Boston, MA',
                    'email' => 'email4@email.com',
                    'website' => 'https://www.wonka.com',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
                ]
        ]);
    }
}
