<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class classes extends Model
{
    use HasFactory;

    protected $guarded = [];

    // establish connection both table (table classes and table subject)
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany
        (
            Subject::class,
            'classes_subject',
            'classes_id',
            'subject_id'
        )->withPivot('status');
    }
}


