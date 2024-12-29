<?php

namespace App\Models;

use App\Enums\ApprovalStatusEnum;
use App\Enums\NoteTypeEnum;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'status',
        'approval_notes',
        'note_types',
        'signature',
        'admission_start_time',
        'OR_start_time',
        'surgery_start_time',
        'anesthesia_start_time',
        'surgery_end_time',
        'anesthesia_end_time',
        'OR_discharge_end_time',
        'RR_time_out',
    ];
    
    protected $casts = [
        'status' => ApprovalStatusEnum::class,
        'note_types' => NoteTypeEnum::class,
        'admission_start_time' => 'datetime',
        'OR_start_time' => 'datetime',
        'surgery_start_time' => 'datetime',
        'anesthesia_start_time' => 'datetime',
        'surgery_end_time' => 'datetime',
        'anesthesia_end_time' => 'datetime',
        'OR_discharge_end_time' => 'datetime',
        'RR_time_out' => 'datetime',
    ];
}
