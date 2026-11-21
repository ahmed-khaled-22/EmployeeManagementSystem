<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = [
        'company_id',
        'department_id',
        'name',
        'email',
        'mobile',
        'address',
        'designation',
        'status',
        'hired_on'
    ];
    public function company() :BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function department() :BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
