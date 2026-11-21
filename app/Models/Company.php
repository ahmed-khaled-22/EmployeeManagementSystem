<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    
    protected $fillable = [
        'name',
    ];

    public function departments() : HasMany
    {
        return $this->hasMany(Department::class, 'company_id', 'id');
    }

    public function employees() : HasMany
    {
        return $this->hasMany(Employee::class, 'company_id', 'id');
    }
}
