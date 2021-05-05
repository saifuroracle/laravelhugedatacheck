<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=0; $i <100000 ; $i++) {
            $data[$i] = [
                'id' => $i+1,
                'name' => Str::random(5),
                'department' => Str::random(5),
                'age' => rand(18, 30),
            ];
        }

        $chunks = array_chunk($data, 5000);
        foreach ($chunks as $key => $chunk) {
            DB::table('students')->insert($chunk);
        }
    }
}
