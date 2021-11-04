<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->insert([
        	[
        		'name' => 'নাগরিক নিবন্ধন (১৮ বছর ও তদুর্ধ)',
        	],[
        		'name' => 'স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয় এর সকল কর্মকর্তা-কর্মচারী',
        	],[
        		'name' => 'অনুমোদিত বেসরকারি ও প্রাইভেট স্বাস্থ্য ও পরিবার পরিকল্পনা কর্মকর্তা-কর্মচারী',
        	],[
        		'name' => 'প্রত্যক্ষভাবে সম্পৃক্ত সকল সরকারি ও বেসরকারি স্বাস্থ্য সেবা কর্মকর্তা- কর্মচারী',
        	],[
        		'name' => 'বীরমুক্তিযোদ্ধা ও বীরঙ্গনা',
        	],[
        		'name' => 'শিক্ষা প্রতিষ্ঠান',
        	],[
        		'name' => 'কৃষক',
        	],[
        		'name' => 'শ্রমিক',
        	],[
        		'name' => 'জাতীয় দলের খেলোয়াড়',
        	],[
        		'name' => '১৮ বছর বা তদূর্ধ্ব ছাত্র-ছাত্রী',
        	],[
        		'name' => 'চিকিৎসা শিক্ষা সংশ্লিষ্ট বিষয়ে ছাত্র ছাত্রী',
        	],[
        		'name' => 'ব্যাংক কর্মকর্তা-কর্মচারী',
        	],
        ]);
    }
}
