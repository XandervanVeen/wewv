<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Recipe::insert([
            'name' => 'Test',
            'description' => 'Testing testing testing...',
            'img_link' => 'img/test.jpg'
        ]);
    }
}
