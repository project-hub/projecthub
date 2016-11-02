<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\User::class, 10)->create();
        DB::table('users')->insert(array(
             array('first_name'=>'Vincent',
             		'last_name'=>'Vega',
             		'company_name'=>'',
             		'address'=>'13763 Hawthorne Boulevard',
             		'city'=>'San Antonio',
             		'state'=>'TX',
             		'zip_code'=>78251,
             		'email'=>'v_vega@gmail.com',
             		'employer'=>0,
             		'content'=>"I'm a full stack LAMP+JS web application developer working in San Antonio. I'm passionate about building applications people use.In addition to web application development, my background is in IT administration. I also have experience building business applications with Microsoft Dynamics CRM, Microsoft SharePoint, Wordpress, and Safe Software's Feature Manipulation Engine FME (for data transformation and manipulation).",
             		'linkedin_id'=>'https://www.linkedin.com/in/vince-vega-66882251',
             		'github'=>'https://gist.github.com/wrobstory/5609803',
             		'website'=>'http://www.rollingstone.com/movies/news/pulp-fiction-a-to-z-20140521',
             		'image'=>'http://mhalabs.org/wp-content/uploads/upme/1451456913_brodie.jpg',
             		'password'=>bcrypt('tastyburger')),
             array('first_name'=>'Matthew',
             		'last_name'=>'Deal',
             		'company_name'=>'Spectraforce Technology',
             		'address'=>'26814 Cactus Boulevard',
             		'city'=>'San Antonio',
             		'state'=>'TX',
             		'zip_code'=>78274,
             		'email'=>'m_deal@spectratech.com',
             		'employer'=>1,
             		'content'=>"At Spectraforce we have a Philosophy - a Philosophy that excellence is derived through dedicated, focused and innovative work. We also believe that knowledge comes through sharing and growth comes to every organization where people use knowledge in team work. A progressive culture and a world of possibilities is what you see with us. 
						We are driven by a belief that employees are our most valuable assets and the foundation of our long-term success is dependent on our people. We are committed to attracting and retaining the best people. We offer a industry standard compensation and benefits package to all our employees in US and India, which includes paid leave, sick leave, Health Insurance / Provident Fund.",
					'linkedin_id'=>'',
             		'github'=>'',
             		'website'=>'http://www.spectraforce.com/index.aspx',
             		'image'=>'https://www.bandtogethernc.org/wp-content/uploads/2015/08/SpectraForce.gif',
             		'password'=>bcrypt('tastyburger')),
          ));
    }
}

