<?php

namespace App\Models;

use App\Models\classes; // Ensure this matches your actual model name
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Make sure to import the BelongsTo class

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function class(): BelongsTo
    {
        return $this->belongsTo(classes::class, 'class_id', 'id');
    }


}





