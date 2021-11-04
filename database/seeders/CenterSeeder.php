<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('centers')->insert([
    		[
    			'name' => 'Shahid Suhrawardy Hospital',
    			'phone' => '9122560-78',
    			'location' => 'Ser-e-Banglanagar, Collegegate',
    		],[
    			'name' => 'Ad-Din Hospital',
    			'phone' => '9353391-3',
    			'location' => 'Moghbazar, Dhaka',
    		],[
    			'name' => 'Ahmed Medical Centre Ltd',
    			'phone' => '8113628',
    			'location' => 'House # 71, Road # 15-A, (New), Dhanmondi C/A',
    		],[
    			'name' => 'Aichi Hospital',
    			'phone' => '8916290,8920165',
    			'location' => 'House # 13, Eshakha Avenue Sector # 6, utttara Dhaka',
    		],[
    			'name' => 'Al Anaiet Adhunik Hospital',
    			'phone' => '8631619',
    			'location' => 'House # 36, Road # 3, Dhanmondi',
    		],[
    			'name' => 'Al- Helal Speacialist Hospital',
    			'phone' => '9006820,9008181',
    			'location' => '150,Rokeya Sarani Senpara ParbataMirpur-10, Dhaka',
    		],[
    			'name' => 'Al Jebel-E-Nur Heart Ltd',
    			'phone' => '8117031',
    			'location' => 'House # 21, Road # 9/A (New),Dhanmondi',
    		],[
    			'name' => 'Al- Rajhi Hospital',
    			'phone' => '8119229,8121172,9117775',
    			'location' => '12, Farmgate-1215, Dhaka',
    		],[
    			'name' => 'Al-Ahsraf General Hospital',
    			'phone' => '8952851-2',
    			'location' => 'House # 12 Road # 21,Sector # 4,Uttara Dhaka',
    		],[
    			'name' => 'Al-Biruni Hospital',
    			'phone' => '8118905, 9115953',
    			'location' => '23/1, Khilzee Road, Shyamoli',
    		],
    	],);
    }
}
