<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingTimeTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('working_times')->insert([
					[
        		'hours' => '6-00'
        	],
        	[
        		'hours' => '7-00'
        	],
        	[
        		'hours' => '8-00'
        	],
        	[
        		'hours' => '9-00'
        	],
        	[
        		'hours' => '10-00'
        	],
        	[
        		'hours' => '11-00'
        	],
        	[
        		'hours' => '12-00'
        	],
        	[
        		'hours' => '13-00'
        	],
        	[
        		'hours' => '14-00'
        	],
        	[
        		'hours' => '15-00'
        	],
        	[
        		'hours' => '16-00'
        	],
        	[
        		'hours' => '17-00'
        	],
        	[
        		'hours' => '18-00'
        	],
        	[
        		'hours' => '19-00'
        	],
        	[
        		'hours' => '20-00'
        	],
        	[
        		'hours' => '21-00'
        	],
        	[
        		'hours' => '22-00'
        	],
        	[
        		'hours' => '23-00'
        	],
        	[
        		'hours' => '24-00'
        	]
				]);

    }
}
