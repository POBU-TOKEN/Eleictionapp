<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function options()
{
    return $this->hasMany(Option::class);
}

public function votes()
{
    return $this->hasMany(Vote::class);
}
}
