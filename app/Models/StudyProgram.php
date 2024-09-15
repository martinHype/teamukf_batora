<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'study_program_name',
        'department_id',
        'academic_year_id'
    ];


    // A Study Program belongs to a Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // A Study Program belongs to an Academic Year
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    // A Study Program has many Students (Users)
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // A Study Program has many Subjects
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'study_program_subject');
    }
}
