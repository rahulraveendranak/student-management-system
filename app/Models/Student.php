<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes, CascadeSoftDeletes;
    protected $cascadeDeletes = ['marks'];

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'age',
        'gender',
        'reporting_teacher_id'
    ];

    public function reported_teacher()
    {
        return $this->belongsTo(ReportingTeacher::class,'reporting_teacher_id');
    }

    public function marks()
    {
        return $this->hasMany(StudentMark::class);
    }
}
