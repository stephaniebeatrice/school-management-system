<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->enum("gender", ["male", "female"]);
            $table->date("dob");
            $table->integer("age");
            $table->string("email_address");
            $table->string("nationality");
            $table->string("address");
            $table->string("grade");
            $table->date("report_date");
            $table->string("father_full_name");
            $table->string("father_phone_number");
            $table->string("father_email_address");
            $table->string("mother_full_name");
            $table->string("mother_phone_number");
            $table->string("mother_email_address");
            $table->string("disability");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
