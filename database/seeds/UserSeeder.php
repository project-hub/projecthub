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
             array('first_name'=>'Brandon',
                    'last_name'=>'Marshall',
                    'company_name'=>'',
                    'address'=>'4642 La Marquesa',
                    'city'=>'San Antonio',
                    'state'=>'TX',
                    'zip_code'=>78247,
                    'email'=>'b_marshall@gmail.com',
                    'employer'=>0,
                    'content'=>"Seeking jobs that help me to improve my programming skills, accomplish my professional goals, extend and apply my knowledge as a systems engineer and ongoing development field to learn new technologies.",
                    'linkedin_id'=>'https://www.linkedin.com/in/fernando-mendoza-rodriguez-a7369123',
                    'github'=>'https://gist.github.com/wrobstory/5609803',
                    'website'=>'www.brandon_marshall.com',
                    'image'=>'https://upop.mit.edu/sites/default/files/DASO%20Frederick%20LinkedIn%20Profile%20Photo.jpg',
                    'password'=>bcrypt('tastyburger')),
             array('first_name'=>'Alexander',
                    'last_name'=>'Prescott',
                    'company_name'=>'',
                    'address'=>'5919 Huebner Rd',
                    'city'=>'San Antonio',
                    'state'=>'TX',
                    'zip_code'=>78216,
                    'email'=>'zander_P@gmail.com',
                    'employer'=>0,
                    'content'=>"I am a full stack web developer.  I completed the Codeup 12-week bootcamp for the LAMP+J stack in April 2014.  I am able to look at what is need of the program and see a clear way to write code to make those functions happen.  I focus on making sure the end product is easy to use and functions without problem.  I am detail oriented and want it all to work together well.
                        Once I finish the Codeup Bootcamp I would like to get a job where I can use my skills while at the same time continue learning new technologies.",
                    'linkedin_id'=>'https://www.linkedin.com/in/cameronholland90',
                    'github'=>'https://gist.github.com/wrobstory/5609803',
                    'website'=>'www.who_is_zander.com',
                    'image'=>'http://www.american.edu/uploads/profiles/large/chris_palmer_profile_11.jpg',
                    'password'=>bcrypt('tastyburger')),
             array('first_name'=>'Stacen',
                    'last_name'=>'Velven',
                    'company_name'=>'',
                    'address'=>'2318 Capstone Hill',
                    'city'=>'San Antonio',
                    'state'=>'TX',
                    'zip_code'=>78276,
                    'email'=>'velvety18@gmail.com',
                    'employer'=>0,
                    'content'=>"I am eager to learn new technologies and their practical applications. 
                                I have over 10 years of professional experience in the nonprofit and government sectors. I am good at identifying success factors in support of specific goals and implementing appropriate solutions.
                                My natural affinity for technology allows me to leverage technologies to implement more robust creative solutions to professional problems.",
                    'linkedin_id'=>'https://www.linkedin.com/in/bennycardenas1',
                    'github'=>'https://gist.github.com/wrobstory/5609803',
                    'website'=>'www.st_velven.com',
                    'image'=>'http://matchpredictions.in/wp-content/uploads/2015/09/MS-Dhoni-Cricinfo-Yahoo-Profile-Stats-Highlights.jpg',
                    'password'=>bcrypt('tastyburger')),
             array('first_name'=>'Brice',
                    'last_name'=>'Wilkinson',
                    'company_name'=>'',
                    'address'=>'3236 Braesview Ln',
                    'city'=>'San Antonio',
                    'state'=>'TX',
                    'zip_code'=>78253,
                    'email'=>'b_dub@gmail.com',
                    'employer'=>0,
                    'content'=>"My focus is on learning and mastering JavaScript functional programming design patterns, React, jQuery, OOP, PHP, MySQL, Laravel, Node, Python, HTML5, and CSS3. All time favorite apps: Evernote, Spotify, Twitter, Trello and Slack. In love with computers since programming my first game in BASIC on an Apple IIE in 1995. I have carried this excitement, fascination and wonder with me as I watch computer science and the internet grow. As a musician, artist and all around geek, it has been my dream to apply these passions and skills in the workplace. This special cocktail of obsessions gives me a unique view of the web and has challenged me to apply myself as a web developer. Currently, I am a Student Fellow at Codeup San Antonio where I am honing my skills and spending my spare time learning new web technologies.",
                    'linkedin_id'=>'https://www.linkedin.com/in/will78006',
                    'github'=>'https://gist.github.com/wrobstory/5609803',
                    'website'=>'www.wilkinson.com',
                    'image'=>'https://lh4.googleusercontent.com/-fHlz7kScna4/AAAAAAAAAAI/AAAAAAABS38/m2l9kOds1mE/photo.jpg',
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

