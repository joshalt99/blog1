<?php

use Illuminate\Database\Seeder;

use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

        //
        {
            $blog_one = new Blog();
            $blog_one->title = 'getting started with GIT';
            $blog_one->body = 'Lets get started with the basics og git. The first thing you need to do is install it into your computer. Just go to the git website and simply install it.
            Now you can go into your terminal in mac or windows command line and start using it. Before we do that lets go to github website instead';
            $blog_one->save();

            $blog_two = new Blog();
            $blog_two->title = 'Create an account in GitHub';
            $blog_two->body = 'Its time to create an account with github if you havent already done so. It is a wonderful place for web development, trust me on this. Here you can host code repositories for free.
             Once you are in, click on the new resposity button to get started. just type in the name you want and click create.';
            $blog_two->save();
        }

}
