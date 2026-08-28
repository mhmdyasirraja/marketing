<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Marketing = 'marketing';
    case Bos = 'bos';
}
