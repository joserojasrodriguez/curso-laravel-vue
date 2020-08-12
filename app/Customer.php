<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'doc', 'address', 'vat', 'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
