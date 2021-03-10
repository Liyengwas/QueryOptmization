<?php

use App\Subject;
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
        $data = [];
        $faker = Faker::create();
        $teachers = collect(Teacher::all()->modelKeys());
        for ($i = 0; $i < 10000; $i++) {
            $name = $faker->name;

            $data[] = [
                'name' => $name,
                'slug' => $name,
                'subject_code' => 1234,
                'teacher_id' => $teachers->random(),
                'description' => $name,
            ];
        }

        foreach ($data as $subject) {
            Subject::create($subject);
        }
    }
}
