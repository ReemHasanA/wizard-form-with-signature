<?php

use App\Enums\ApprovalStatusEnum;
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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('admission_start_time')->nullable();
            $table->dateTime('OR_start_time')->nullable();
            $table->dateTime('surgery_start_time')->nullable();
            $table->dateTime('anesthesia_start_time')->nullable();
            $table->dateTime('surgery_end_time')->nullable();
            $table->dateTime('anesthesia_end_time')->nullable();
            $table->dateTime('OR_discharge_end_time')->nullable();
            $table->dateTime('RR_time_out')->nullable();
            $table->string('status', )->default(ApprovalStatusEnum::Approve->value);
            $table->string('approval_notes')->nullable();
            $table->string('note_types')->nullable();
            $table->json('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
