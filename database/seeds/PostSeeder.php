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
                    'title'=>'Ruby Developer',
                    'content'=>'Based in the Denver Tech Center we are seeking highly motivated, skilled, and experienced developers to assist the firm’s internet development team. The ideal candidate will have a passion for building innovative and engaging web applications that solve the firm’s business challenges. This job requires a candidate with a solid web development track record along with strong communication and collaboration skills, a can-do attitude, creative imagination, who can join the team and make an immediate impact. Following a quick onboarding process, the candidate will be assigned to one of the team’s existing agile teams where they will be responsible for design, development and testing of our site’s new features.',
                    'on_site'=>0,),
             array('created_by'=>7,
                    'title'=>'Application Developer',
                    'content'=>'Experis supports a large client in Boerne, TX in need of an Application developer. This individual will be responsible for the development of Web frontend assets for Angular 1.0/Responsive web platform Maintenance/support for existing defects and support requests Support performance and functional testing Support platform migrations based on framework or dependent system upgrades',
                    'on_site'=>1,),
             array('created_by'=>6,
                    'title'=>'Automation Test Engineer',
                    'content'=>'We have Opening for Automation Test Engineer (Python) for one of our client at San Antonio,Tx. Responsibilities -include writing and executing automated test scripts using Open CAF -writing positive and negative smoke and regression test scripts to test product functionality and integration with dependencies -testing APIs, user interfaces, web services and/or web applications -participating in test automation code reviews -collaborating with other quality and development engineers to build, evolve, and maintain a scalable continuous build and deployment pipeline',
                    'on_site'=>1,),
         ));
    }
}