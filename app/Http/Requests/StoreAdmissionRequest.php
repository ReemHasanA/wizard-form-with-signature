<?php

namespace App\Http\Requests;

use App\Enums\ApprovalStatusEnum;
use App\Enums\NoteTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAdmissionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'status' => ['required', Rule::enum(ApprovalStatusEnum::class)],
            'signature' => ['required', 'json'],
            'note_types' => ['nullable',Rule::enum(NoteTypeEnum::class)],
            'admission_start_time' => ['nullable','date'],
            'OR_start_time' => ['nullable','date'],
            'surgery_start_time' => ['nullable','date'],
            'anesthesia_start_time' => ['nullable','date'],
            'surgery_end_time' => ['nullable','date','after:surgery_start_time'],
            'anesthesia_end_time' => ['nullable','date','after:anesthesia_start_time'],
            'OR_discharge_end_time' => ['nullable','date','after:OR_start_time'],
            'RR_time_out' => ['nullable','date'],
        ];
    }
}
