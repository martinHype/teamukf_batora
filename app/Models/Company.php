<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'phone_number',
        'email_address',
        'vat_number',
        'contact_person'
    ];

    // A Company has many Internships
    public function internships()
    {
        return $this->hasMany(Internship::class);
    }

    // A Company has a Contact Person (User)
    public function contactPerson()
    {
        return $this->belongsTo(User::class, 'contact_person');
    }
}
