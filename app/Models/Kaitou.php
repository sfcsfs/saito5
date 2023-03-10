<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kaitou extends Model
{
    use HasFactory;
    protected $table = 'kaitou';
    protected $fillable = ['text','はい','いいえ','どうしても答えられない・答えたくない'];
    public function getData()
    {
        return $this->text;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
