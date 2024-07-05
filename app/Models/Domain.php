<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Domain as BaseDomain;

class Domain extends BaseDomain
{
    use HasFactory;
    public static function booted()
    {
        static::creating(fn ($domain) => 
            $domain->domain = $domain->domain . '.' . config('tenancy.central_domains')[0],
        );
    }
}
