<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'service',
        'message',
        'status',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
