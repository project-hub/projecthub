<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert(array(
             array('created_by'=>8,
                    'title'=>'Web Developer',
                    'content'=>'Two Guys Moving would like to hire a developer to design and build a website, allowing our customers to book appointments, follow us on social media, and learn about our rates.',
                    'on_site'=>1,),
             array('created_by'=>9,
                    'title'=>'Web Designer',
                    'content'=>'Our family is looking for a developer to build a custom website for our restaurant. We hope to make a fun site that reflects our charismatic nature and family-environment. ',
                    'on_site'=>0,),
             array('created_by'=>7,
                    'title'=>'Application Developer',
                    'content'=>'We are in need of a developer to create a mobile application. The app should include the ability to register as a new user, view and edit profiles, search our services and prices, and make an appointment.',
                    'on_site'=>1,),
             array('created_by'=>6,
                    'title'=>'Web Developer',
                    'content'=>'We are looking for a web developer to help us increase our online presence. We would like a website built that is user friendly and focuses on our ability to provide fast and friendly service.',
                    'on_site'=>1,),
         ));
    }
}