<?php

use Illuminate\Database\Seeder;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('skills')->insert(array(
             array('skill_id'=>'3',
                   'user_id'=>'1',
                   ),
             array('skill_id'=>'4',
                   'user_id'=>'1',
                   ),
             array('skill_id'=>'5',
                   'user_id'=>'1',
                   ),
             array('skill_id'=>'6',
                   'user_id'=>'1',
                   ),
          ));
    }
}