<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Factory as Faker;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //randomize teacher id
        $teachers = collect(Teacher::all()->modelKeys());
        
        for($i = 0; $i < 10000; $i++){
            $name = ;
            'name' => ,
            'slug' => ,
            'subject_code' => 1234,
            'teacher_id' => $teachers->random(),
            'description' => 
                
        }
    }
}
