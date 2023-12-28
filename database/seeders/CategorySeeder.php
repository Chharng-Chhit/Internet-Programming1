<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            // $Category = categories::insert([
            //     'name'=>Str::random(10),
            // ]);
            DB::table('category')->insert([
                'name'=>Str::random(10),
            ]);
        }
    }
}
