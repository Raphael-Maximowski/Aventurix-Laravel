<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explorador extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
    protected $guarded = [];
}
