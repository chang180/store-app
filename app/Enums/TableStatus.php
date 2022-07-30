<?php

namespace App\Enums;

enum TableStatus:string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';
    case Reserved = 'reserved';
    case Cancelled = 'cancelled';
}