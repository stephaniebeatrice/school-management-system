<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    protected $fillable = ["first_name",
   "middle_name",
   "last_name",
   "dob",
   "age",
   "Nationality",
   "address",
   "course_study",
   "report_date",
   "father_full_name",
   "father_phone_number",
   "father_email_address",
   "mother_full_name",
   "mother_phone_number",
   "mother_email_address",
   "medical_report",
   "disability"];
    protected $table = "student_admissions";
}
