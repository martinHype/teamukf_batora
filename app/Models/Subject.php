<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name'
    ];

    // A Subject belongs to many Study Programs
    public function studyPrograms()
    {
        return $this->belongsToMany(StudyProgram::class, 'study_program_subject');
    }
}
