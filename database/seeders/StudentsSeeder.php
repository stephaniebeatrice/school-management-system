<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['male', 'female'];

        for ($i=0; $i < 6; $i++){
        DB::table('student_admissions')->insert([
            "first_name"=>Str::random(10),
            "middle_name"=>Str::random(10),
            "last_name"=>Str::random(10),
            "gender"=> Arr::random($genders),
            "dob"=>Carbon::now()->subYears(rand(18, 70)),
            "age"=>random_int(4, 19),
            "email_address"=>Str::random(10)."@gmail.com",
            "nationality"=>Str::random(10),
            "address"=>Str::random(10),
            "grade"=>Str::random(10),
           "report_date"=>Carbon::now()->subYears(rand(18, 70)),
            "father_full_name"=>Str::random(10),
            "father_phone_number"=>Str::random(10),
            "father_email_address"=>Str::random(10)."@gmail.com",
            "mother_full_name"=>Str::random(10),
            "mother_phone_number"=>Str::random(10),
            "mother_email_address"=>Str::random(10)."@gmail.com",
            "disability"=>Str::random(10),
        ]);
    }
}
}
