<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;


enum PriceInterval: string
{
    case ONETIME = 'onetime';
    case DAY = 'day';
    case WEEK = 'week';
    case MONTH = 'month';
    case YEAR = 'year';
}
