<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = ["first_name",
    "middle_name",
    "surname",
    "id_number",
    "child_name",
    "child_reg_no"];
    protected $table = "parents";
}
