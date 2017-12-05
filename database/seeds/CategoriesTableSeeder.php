<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cat_one = new Category();
        $cat_one->slug = 'laravel';
        $cat_one->name = 'Laravel';
        $cat_one->save();

        $cat_two = new Category();
        $cat_two->slug = 'php';
        $cat_two->name = 'PHP';
        $cat_two->save();
    }

}
