<?php

use Illuminate\Database\Seeder;

class application_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$pay_frequescys = array(array('frequency'=>'Weekly'),
					    		array('frequency'=>'Bi-Weekly'),
					    		array('frequency'=>'2x Month'),
					    		array('frequency'=>'Monthly')
    							);
    	DB::table('pay_frequencies')->delete();
        DB::table('pay_frequencies')->insert($pay_frequescys);



		$adult_income_types = array(array('type'=>'Earnings from Work'),
						    		array('type'=>'Public Assistance/Child Support'),
						    		array('type'=>'Pensions/Retirements/All Other Income')
    								);
        DB::table('adult_income_types')->delete();
        DB::table('adult_income_types')->insert($adult_income_types);

		$assistance_programs = array(	array('program_name'=>'SNAP'),
							    		array('program_name'=>'TANF'),
							    		array('program_name'=>'FDPIR'),
    	
    								);
         DB::table('assistance_programs')->delete();
         DB::table('assistance_programs')->insert($assistance_programs );



         $user = ['first_name'=>'test','last_name'=>'user','email'=>'admin@admin.com','password'=>'$2a$04$z4nH1u9xQWbR4VxkKUOwWeZhN5U/h3nE713iDNH/ZvnHvyHetFIlq'];
        DB::table('users')->delete();
        DB::table('users')->insert($user);
    }
}
