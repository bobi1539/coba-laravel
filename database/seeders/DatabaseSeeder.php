<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'ucup surucup',
        //     'email' => 'ucup@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'otong surotong',
        //     'email' => 'otong@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(200)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur facere esse commodi deleniti, iste a dolorem aut nulla rem voluptatibus perspiciatis nesciunt ex. Sunt quas, et explicabo soluta facere cupiditate repellendus omnis modi! Ipsum quidem, optio laudantium sunt eveniet assumenda dolores neque architecto reiciendis. Recusandae error facere quod nam consequatur consectetur, maxime blanditiis velit veritatis at, mollitia eligendi tempora laborum, corrupti praesentium. Aspernatur eius neque inventore laudantium consectetur maiores illo quam enim voluptatibus sequi, est cum quod fugit nemo similique perferendis, eos quibusdam. Atque, blanditiis amet incidunt doloremque aspernatur ad voluptate officiis reprehenderit quia labore necessitatibus provident sapiente expedita repellendus officia adipisci! Ratione numquam dignissimos voluptates maxime quae, veritatis assumenda placeat. Placeat, ducimus?'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur facere esse commodi deleniti, iste a dolorem aut nulla rem voluptatibus perspiciatis nesciunt ex. Sunt quas, et explicabo soluta facere cupiditate repellendus omnis modi! Ipsum quidem, optio laudantium sunt eveniet assumenda dolores neque architecto reiciendis. Recusandae error facere quod nam consequatur consectetur, maxime blanditiis velit veritatis at, mollitia eligendi tempora laborum, corrupti praesentium. Aspernatur eius neque inventore laudantium consectetur maiores illo quam enim voluptatibus sequi, est cum quod fugit nemo similique perferendis, eos quibusdam. Atque, blanditiis amet incidunt doloremque aspernatur ad voluptate officiis reprehenderit quia labore necessitatibus provident sapiente expedita repellendus officia adipisci! Ratione numquam dignissimos voluptates maxime quae, veritatis assumenda placeat. Placeat, ducimus?'
        // ]);

        // Post::create([
        //     'title' => 'Judul-Ke-Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus ullam non omnis in consequuntur facere esse commodi deleniti, iste a dolorem aut nulla rem voluptatibus perspiciatis nesciunt ex. Sunt quas, et explicabo soluta facere cupiditate repellendus omnis modi! Ipsum quidem, optio laudantium sunt eveniet assumenda dolores neque architecto reiciendis. Recusandae error facere quod nam consequatur consectetur, maxime blanditiis velit veritatis at, mollitia eligendi tempora laborum, corrupti praesentium. Aspernatur eius neque inventore laudantium consectetur maiores illo quam enim voluptatibus sequi, est cum quod fugit nemo similique perferendis, eos quibusdam. Atque, blanditiis amet incidunt doloremque aspernatur ad voluptate officiis reprehenderit quia labore necessitatibus provident sapiente expedita repellendus officia adipisci! Ratione numquam dignissimos voluptates maxime quae, veritatis assumenda placeat. Placeat, ducimus?'
        // ]);

    }
}
