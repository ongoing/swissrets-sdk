<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;


enum PriceReferring: string
{
    case ALL = 'all';
    case M2 = 'm2';
    case KM2 = 'km2';
}
