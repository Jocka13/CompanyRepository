<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'uid', 'address'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function salary(): HasMany
    {
        return $this->hasMany(Salary::class);
    }
}
