<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'name-of-account', 'amount', 'stage', 'opportunity',
    ];
}
