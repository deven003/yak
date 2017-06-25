<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')
        	->insert([
        			[
        				'name' => 'Life Insurance',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Credit Card',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Health Insurance',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Electricity',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'TV Cable',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Internet',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Home Loan',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'car Loan',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        			[
        				'name' => 'Personal Loan',
        				'created_at' => date('Y-m-d H:i:s'),
        				'updated_at' => date('Y-m-d H:i:s')
        			],

        		]);
    }
}
