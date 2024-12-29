<?php

namespace App\Enums;

enum NoteTypeEnum : string
{
    case ProgressNotes = 'progress_notes';
    case NurseNotes = 'nurse_notes';
    case DoctorOrders = 'doctor_orders';
    case ORNotes = 'OR_notes';
    case AnesthesiaNotes = 'anesthesia_notes';
}
