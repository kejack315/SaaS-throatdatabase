<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['word', 'definition', 'word_type'];

    public function wordType()
    {
        return $this->belongsTo(wordType::class);
    }
}
