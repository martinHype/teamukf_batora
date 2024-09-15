<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_status_name'
    ];

    // A Contract Status can be associated with many Contracts
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
