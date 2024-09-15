<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year_name',
        'year'
    ];

    // An Academic Year can have many Study Programs
    public function studyPrograms()
    {
        return $this->hasMany(StudyProgram::class);
    }
}
