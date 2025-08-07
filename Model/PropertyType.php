<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;



enum PropertyType: string
{
    case BUY = 'buy';
    case RENT = 'rent';
}
