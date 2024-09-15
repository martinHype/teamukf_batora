<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'internship_id',
        'created_by_id',
        'comment'
    ];

    // An Internship Comment belongs to an Internship
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }

    // An Internship Comment is created by a User
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
