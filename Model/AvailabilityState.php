<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;


enum AvailabilityState: string
{
    case ACTIVE = 'active';
    case PRIVATE = 'private';
    case REFERENCE = 'reference';
    case RESERVED = 'reserved';
    case TAKEN = 'taken';
}
