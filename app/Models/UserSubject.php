<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubject extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'math', 'math_mark', 'history', 'history_mark', 'english', 'english_mark'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
