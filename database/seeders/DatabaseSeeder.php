<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Salis Qomaruzaman',
            'username' => 'salisnizar',
            'email' => 'nizar@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Nizar Qomaruzaman',
        //     'email' => 'salis@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit cumque reiciendis odio saepe consequuntur totam error,</p><p><b>tempore possimus ab repellat dignissimos</b>obcaecati! Nemo voluptates, assumenda quo officia at dicta voluptate repudiandae atque pariatur maxime qui facere obcaecati accusantium a,</p><p><u>perspiciatis ipsum reiciendis! Saepe nulla hic id numquam tempore, aspernatur et earum corporis dicta,</u> architecto fugiat odit temporibus possimus aut aliquam magni ea optio adipisci. Repudiandae autem dolorum eius dolor aliquam pariatur sint corporis distinctio nesciunt incidunt sit voluptatem quia, atque modi iure?</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit cumque reiciendis odio saepe consequuntur totam error,</p><p><b>tempore possimus ab repellat dignissimos</b>obcaecati! Nemo voluptates, assumenda quo officia at dicta voluptate repudiandae atque pariatur maxime qui facere obcaecati accusantium a,</p><p><u>perspiciatis ipsum reiciendis! Saepe nulla hic id numquam tempore, aspernatur et earum corporis dicta,</u> architecto fugiat odit temporibus possimus aut aliquam magni ea optio adipisci. Repudiandae autem dolorum eius dolor aliquam pariatur sint corporis distinctio nesciunt incidunt sit voluptatem quia, atque modi iure?</p>',
        //     'category_id' => 3,
        //     'user_id' => 3
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit cumque reiciendis odio saepe consequuntur totam error,</p><p><b>tempore possimus ab repellat dignissimos</b>obcaecati! Nemo voluptates, assumenda quo officia at dicta voluptate repudiandae atque pariatur maxime qui facere obcaecati accusantium a,</p><p><u>perspiciatis ipsum reiciendis! Saepe nulla hic id numquam tempore, aspernatur et earum corporis dicta,</u> architecto fugiat odit temporibus possimus aut aliquam magni ea optio adipisci. Repudiandae autem dolorum eius dolor aliquam pariatur sint corporis distinctio nesciunt incidunt sit voluptatem quia, atque modi iure?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit cumque reiciendis odio saepe consequuntur totam error,</p><p><b>tempore possimus ab repellat dignissimos</b>obcaecati! Nemo voluptates, assumenda quo officia at dicta voluptate repudiandae atque pariatur maxime qui facere obcaecati accusantium a,</p><p><u>perspiciatis ipsum reiciendis! Saepe nulla hic id numquam tempore, aspernatur et earum corporis dicta,</u> architecto fugiat odit temporibus possimus aut aliquam magni ea optio adipisci. Repudiandae autem dolorum eius dolor aliquam pariatur sint corporis distinctio nesciunt incidunt sit voluptatem quia, atque modi iure?</p>',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);
        // Post::create([
        //     'title' => 'Judul kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum excepturi, laborum perspiciatis pariatur quisquam earum suscipit cumque reiciendis odio saepe consequuntur totam error,</p><p><b>tempore possimus ab repellat dignissimos</b>obcaecati! Nemo voluptates, assumenda quo officia at dicta voluptate repudiandae atque pariatur maxime qui facere obcaecati accusantium a,</p><p><u>perspiciatis ipsum reiciendis! Saepe nulla hic id numquam tempore, aspernatur et earum corporis dicta,</u> architecto fugiat odit temporibus possimus aut aliquam magni ea optio adipisci. Repudiandae autem dolorum eius dolor aliquam pariatur sint corporis distinctio nesciunt incidunt sit voluptatem quia, atque modi iure?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
