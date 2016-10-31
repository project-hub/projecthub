<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('skills')->insert(array(
             array('name'=>'Java'),
             array('name'=>'Python'),
             array('name'=>'C'),
             array('name'=>'C#'),
             array('name'=>'C++'),
             array('name'=>'Objective-C'),
             array('name'=>'Ruby'),
             array('name'=>'JavaScript'),
             array('name'=>'PHP'),
             array('name'=>'HTML'),
             array('name'=>'CSS'),
             array('name'=>'SQL'),
             array('name'=>'Perl'),
          ));
    }
}