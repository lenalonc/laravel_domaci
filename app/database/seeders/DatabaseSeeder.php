<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Manufacturer;
use \App\Models\Smartphone;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Manufacturer::truncate();
        User::truncate();
        Smartphone::truncate();

        Smartphone::factory(5)->create();

        $user = User::factory()->create();
        $man1 = Manufacturer::factory()->create();
        $man2 = Manufacturer::factory()->create();

        Smartphone::factory(3)->create([
            'user_id'=>$user->id,
            'manufacturer_id'=>$man1->id
        ]);

        Smartphone::factory(2)->create([
            'user_id'=>$user->id,
            'manufacturer_id'=>$man2->id
        ]);

        // $man1 = Manufacturer::create([
        //     'naziv'=>'Apple',
        //     'zemlja_porekla'=>'USA'
        // ]);
        // $man2 = Manufacturer::create([
        //     'naziv'=>'Samsung',
        //     'zemlja_porekla'=>'Juzna Koreja'
        // ]);
        // $man3 = Manufacturer::create([
        //     'naziv'=>'Huawei',
        //     'zemlja_porekla'=>'Kina'
        // ]);


        // $ph1 = Smartphone::create([
        //     'model'=>'Galaxy Z flip 4',
        //     'serijski_broj'=>'133A3',
        //     'memorija'=>'128 GB',
        //     'cena'=>590,
        //     'user_id'=>$user->id,
        //     'manufacturer_id'=>$man2->id
        // ]);

        // $ph2 = Smartphone::create([
        //     'model'=>'Iphone 14',
        //     'serijski_broj'=>"a345d",
        //     'memorija'=>'128 GB',
        //     'cena'=>900,
        //     'user_id'=>$user->id,
        //     'manufacturer_id'=>$man1->id
        // ]);

        // $ph3 = Smartphone::create([
        //     'model'=>'Huawei P50 pro',
        //     'serijski_broj'=>"mb456",
        //     'memorija'=>'256 GB',
        //     'cena'=>800,
        //     'user_id'=>$user->id,
        //     'manufacturer_id'=>$man3->id
        // ]);


    }
}
