<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function poll()
{
    return $this->belongsTo(Poll::class);
}

public function option()
{
    return $this->belongsTo(Option::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
}
