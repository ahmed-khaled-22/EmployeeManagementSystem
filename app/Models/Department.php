<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    protected $fillable = [
        'company_id',
        'name',
    ];

    public function company() :BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function employees() :HasMany
    {
        return $this->hasMany(Employee::class, 'department_id', 'id');
    } 
}
