<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'login_name',
        'first_name',
        'last_name',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
