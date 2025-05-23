<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listings_id');
    }
}