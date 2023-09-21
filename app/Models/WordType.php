<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordType extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = ['name', 'code'];

    public function words()
    {
        return $this->hasMany(Word::class);
    }
}
