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
             array('name'=>'PHP'),
             array('name'=>'HTML'),
             array('name'=>'CSS'),
             array('name'=>'Laravel'),
             array('name'=>'Java'),
             array('name'=>'Angular'),
          ));
    }
}