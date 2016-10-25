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
    	$skills = [
    		['name' => 'php'],
    		['name' => 'html'],
    		['name' => 'css'],
    		['name' => 'laravel'],
    		['name' => 'angular'],
    		['name' => 'java'],
    	];
	    foreach($skills as $skill)
	    {
	    	$skill1 = new App\Models\Skill();
	    	$skill1->name = $skill['name'];
	    	$skill1->save();
	    }
    }
}