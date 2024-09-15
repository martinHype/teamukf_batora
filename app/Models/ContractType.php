<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_type_name'
    ];

    // A Contract Type can have many Contracts or Internships
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function internships()
    {
        return $this->hasMany(Internship::class, 'internship_type_id');
    }
}
