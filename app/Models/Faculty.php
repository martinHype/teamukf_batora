<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_name'
    ];

    // A Faculty has many Departments
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
