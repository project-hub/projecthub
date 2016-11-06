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
                    'title'=>'Instructional Designer',
                    'content'=>'This growing industry leader has an immediate 4-5+ month contract opening in San Antonio, TX-for an Instructional Designer. -Will be responsible for various tasks related to training and development functions. -Will lead, design and develop training and instructional materials for internal teammates on a variety of topics, ensuring the instructional integrity of each training deliverable through measuring training effectiveness. -Must possess strong project management skills, be able to handle multiple tasks and assist the management team to ensure the strategy and directional goals of the company are achieved.',
                    'on_site'=>1,),
             array('created_by'=>9,
                    'title'=>'Web Designer',
                    'content'=>'Our family is looking for a developer to build a custom website for our restaurant. We hope to make a fun site that reflects our charismatic nature and family-environment. ',
                    'on_site'=>0,),
             array('created_by'=>7,
                    'title'=>'Application Developer',
                    'content'=>'Experis supports a large client in Boerne, TX in need of an Application developer. This individual will be responsible for the development of Web frontend assets for Angular 1.0/Responsive web platform Maintenance/support for existing defects and support requests Support performance and functional testing Support platform migrations based on framework or dependent system upgrades',
                    'on_site'=>1,),
             array('created_by'=>6,
                    'title'=>'Web Developer',
                    'content'=>'We are looking for a web developer to help us increase our online presence. We would like a website built that is user friendly and focuses on our ability to provide fast and friendly service.',
                    'on_site'=>1,),
         ));
    }
}