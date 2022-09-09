<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'name', 'rfc', 'phone', 'mount', 'address', 'email', 'ticket', 'date', 'status',
    ];
}
