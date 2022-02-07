<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // City::truncate();
       /* $x = file_get_contents("https://countriesnow.space/api/v0.1/countries");
        $x=json_decode($x, true);
        $x = $x["data"];
        $i=0;
        foreach ($x as $country) {
        $i++;
        $cities = $country["cities"];
        foreach($cities as $city ){
            $cityx = [
                [
                    
                    'city_name'           => $city,
                    'status'          => 1,
                    'country_id'       => $i,
                ],
            ];
    
            City::insert($cityx);
        }

        }*/

        $x = file_get_contents("https://countriesnow.space/api/v0.1/countries/states");
        $x=json_decode($x, true);
        $x = $x["data"];
        $i=0;
        foreach ($x as $country) {
            if(!empty($country["states"])){
        $count =  [
                [
                    
                    'name'           => $country["name"],
                    'code'       => $country["iso3"],
                ],
            ];
            $cx=Country::insert($count);
            $i++;
        $cities = $country["states"];
        foreach($cities as $city ){
            $string = $city['name'];
$search = array('Province', 'Region', 'Territory', 'District','Governorate','Department');
$replace = array('', '', '', '','','');
$cityname = str_replace($search, $replace, $string);
            $cityx = [
                [
                    'name'           => $cityname,
                    'status'          => "active",
                    'country_id'       => $i,
                ],
            ];
    
            City::insert($cityx);
        }

        }
    }
        /////////

    }
}
