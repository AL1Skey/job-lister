<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use App\Models\Users;
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
        User::factory(10)->create();
        Listing::factory(15)->create();

        // Users::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create(
        //     [
        //         'title' => 'Fullstack Django Developer',
        //         'tags' => 'Python, MySQL',
        //         'company' => 'Acme Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'some@reason.com',
        //         'website' => 'https://www.acme.com',
        //         'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi minus similique eos exercitationem nisi natus numquam illo fugit. Ducimus tempora earum quos exercitationem! Consequatur voluptatibus delectus illo natus animi optio vitae voluptatum vel libero. Eaque, fuga nam quia laudantium repellat impedit quas corrupti quaerat iste et ex commodi accusantium molestias ipsa, in magnam nihil reiciendis explicabo repellendus? Enim porro ex facilis libero. Nisi cupiditate iure magnam beatae omnis et cum, nulla ipsum eos maiores repudiandae voluptates veniam dolore libero autem iusto dolorum ipsam laudantium vero? Odio at ad quas, quisquam dolor qui? Ducimus veniam ea vitae tempora saepe architecto dolores?'
        //     ]
        // );

        // Listing::create(
        //     [
        //         'title' => 'Laravel Junior Developer',
        //         'tags' => 'PHP, Laravel, MySQL',
        //         'company' => 'Mi Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'some@reason.com',
        //         'website' => 'https://www.mi.com',
        //         'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi minus similique eos exercitationem nisi natus numquam illo fugit. Ducimus tempora earum quos exercitationem! Consequatur voluptatibus delectus illo natus animi optio vitae voluptatum vel libero. Eaque, fuga nam quia laudantium repellat impedit quas corrupti quaerat iste et ex commodi accusantium molestias ipsa, in magnam nihil reiciendis explicabo repellendus? Enim porro ex facilis libero. Nisi cupiditate iure magnam beatae omnis et cum, nulla ipsum eos maiores repudiandae voluptates veniam dolore libero autem iusto dolorum ipsam laudantium vero? Odio at ad quas, quisquam dolor qui? Ducimus veniam ea vitae tempora saepe architecto dolores?'
        //     ]
        // );
    }
}
