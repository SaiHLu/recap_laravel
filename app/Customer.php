<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'status' => 1
    ];

    public function getStatusAttribute($attribute) {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query) {
        return $query->where('status', 1);
    }

    public function scopeInactive($query) {
        return $query->where('status', 0);
    }

    

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',  
        ];
    }
}
