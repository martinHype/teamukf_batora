<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'attachment_name',
        'attachment_description',
        'file_url',
        'attachment_type_id'
    ];

    // An Attachment belongs to an AttachmentType
    public function attachmentType()
    {
        return $this->belongsTo(AttachmentType::class);
    }
}
