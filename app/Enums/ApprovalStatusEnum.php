<?php

namespace App\Enums;

enum ApprovalStatusEnum : string
{
    case Approve = 'approve';
    case Reject = 'reject';
}
