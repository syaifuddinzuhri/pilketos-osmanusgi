<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'name',
        'class',
        'major',
        'vision',
        'mision',
        'photo',
    ];

    /**
     * Get all of the comments for the Candidate
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vote()
    {
        return $this->hasMany(Vote::class, 'candidate_id', 'id');
    }
}