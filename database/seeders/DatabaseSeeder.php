<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Kasino',
        //     "email" => 'kasino@gmail.com',
        //     "password" => bcrypt('kasino'),
        // ]);
       
        // User::create([
        //     'name' => 'Ridwan Satria Wicaksana',
        //     "email" => 'wicaksana.rs@gmail.com',
        //     "password" => bcrypt('ridwan'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug'=> 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug'=> 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Postingan pertama',
        //     "slug" => 'postingan-pertama',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente, ullam sint laudantium dolor non facilis at voluptatum. Nobis ratione labore similique aspernatur cupiditate minus, suscipit, quo eos explicabo expedita alias iure tenetur porro eaque! Ex sint sed repellendus fugiat iure impedit dolorem, sapiente quis voluptas, praesentium perspiciatis, quia eveniet earum molestiae delectus. Recusandae officiis voluptatum ducimus nostrum facilis, dolorum, omnis consequuntur harum velit quia debitis ratione optio, laborum deleniti accusantium ex tempora sapiente sunt error nemo eius maiores? Inventore tenetur deserunt maxime beatae?",
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'tittle' => 'Postingan kedua',
        //     "slug" => 'postingan-kedua',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente, ullam sint laudantium dolor non facilis at voluptatum. Nobis ratione labore similique aspernatur cupiditate minus, suscipit, quo eos explicabo expedita alias iure tenetur porro eaque! Ex sint sed repellendus fugiat iure impedit dolorem, sapiente quis voluptas, praesentium perspiciatis, quia eveniet earum molestiae delectus. Recusandae officiis voluptatum ducimus nostrum facilis, dolorum, omnis consequuntur harum velit quia debitis ratione optio, laborum deleniti accusantium ex tempora sapiente sunt error nemo eius maiores? Inventore tenetur deserunt maxime beatae?",
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'tittle' => 'Postingan ketiga',
        //     "slug" => 'postingan-ketiga',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente, ullam sint laudantium dolor non facilis at voluptatum. Nobis ratione labore similique aspernatur cupiditate minus, suscipit, quo eos explicabo expedita alias iure tenetur porro eaque! Ex sint sed repellendus fugiat iure impedit dolorem, sapiente quis voluptas, praesentium perspiciatis, quia eveniet earum molestiae delectus. Recusandae officiis voluptatum ducimus nostrum facilis, dolorum, omnis consequuntur harum velit quia debitis ratione optio, laborum deleniti accusantium ex tempora sapiente sunt error nemo eius maiores? Inventore tenetur deserunt maxime beatae?",
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'tittle' => 'Postingan keempat',
        //     "slug" => 'postingan-keempat',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore fugit quae eligendi odit perferendis consectetur, possimus sit autem laborum delectus cupiditate voluptate. Quas ea sapiente, ullam sint laudantium dolor non facilis at voluptatum. Nobis ratione labore similique aspernatur cupiditate minus, suscipit, quo eos explicabo expedita alias iure tenetur porro eaque! Ex sint sed repellendus fugiat iure impedit dolorem, sapiente quis voluptas, praesentium perspiciatis, quia eveniet earum molestiae delectus. Recusandae officiis voluptatum ducimus nostrum facilis, dolorum, omnis consequuntur harum velit quia debitis ratione optio, laborum deleniti accusantium ex tempora sapiente sunt error nemo eius maiores? Inventore tenetur deserunt maxime beatae?",
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

    }
}
