<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'attachment_type_name'
    ];

    // An Attachment Type can have many Attachments
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }
}
