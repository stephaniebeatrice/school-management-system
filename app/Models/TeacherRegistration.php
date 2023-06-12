<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRegistration extends Model
{
    protected $fillable = ["first_name",
    "middle_name",
    "last_name",
    "id_number",
    "dob",
    "age",
    "Nationality",
    "address",
    "course_teaching",
    "medical_report",
    "disability"];
    protected $table = 'teacher_registrations';
}
