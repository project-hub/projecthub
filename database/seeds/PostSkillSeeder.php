<?php

use Illuminate\Database\Seeder;

class PostSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('post_skills')->insert(array(
             array('skill_id'=>10,
                    'post_id'=>1,
                    'skill_id'=>11,
                    'post_id'=>1,
                    'skill_id'=>8,
                    'post_id'=>1,),

          ));
    }
}