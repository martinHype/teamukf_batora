<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudyProgram;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyProgram::create(['study_program_name' => 'aplikovaná ekológia a environmentalistika','academic_year_id'=>1]);
        StudyProgram::create(['study_program_name' => 'aplikovaná informatika','academic_year_id'=>1]);
        StudyProgram::create(['study_program_name' => 'biológia','academic_year_id'=>1]);
        StudyProgram::create(['study_program_name' => 'fyzika','academic_year_id'=>1]);
        StudyProgram::create(['study_program_name' => 'matematicko-štatistické a informačné metódy v ekonómii a finančníctve']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo biológie (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo ekológie (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo geografie (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo chémie (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo informatiky (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo matematiky (v kombinácii)']);
        StudyProgram::create(['study_program_name' => 'učiteľstvo odborných ekonomických predmetov (v kombinácii)']);
    }
}
