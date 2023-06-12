<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
   protected $fillable = ["reg_no",
   "name",
  "grade",
  "hostel_name",
   "room_no",
   "payment"];
   protected $table = "accomodations";
}
