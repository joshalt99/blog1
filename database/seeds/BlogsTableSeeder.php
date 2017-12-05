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
            $blog_one->body = 'getting started with GITgetting started with GITgetting started with GITgetting started with GITgetting started with GITgetting started with GITgetting started with GITgetting started with GIT';
            $blog_one->save();

            $blog_two = new Blog();
            $blog_two->title = 'Create an account in GitHub';
            $blog_two->body = 'Create an account in GitHubCreate an account in GitHubCreate an account in GitHubCreate an account in GitHubCreate an account in GitHubCreate an account in GitHub';
            $blog_two->save();
        }

}
