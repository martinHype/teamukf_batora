<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'responsible_person',
        'faculty_id'
    ];

    // A Department belongs to a Faculty
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    // A Department has many Users (staff or students)
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // A Department has many Study Programs
    public function studyPrograms()
    {
        return $this->hasMany(StudyProgram::class);
    }
}
