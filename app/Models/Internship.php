<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'company_id',
        'internship_name',
        'internship_description',
        'start_date',
        'end_date',
        'student_feedback',
        'company_feedback',
        'internship_type_id',
        'internship_status_id',
        'grade'
    ];

    // An Internship belongs to a Student (User)
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // An Internship belongs to a Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // An Internship has one type
    public function internshipType()
    {
        return $this->belongsTo(ContractType::class, 'internship_type_id');
    }

    // An Internship has one type
    public function internshipStatus()
    {
        return $this->belongsTo(ContractStatus::class, 'internship_status_id');
    }
}
