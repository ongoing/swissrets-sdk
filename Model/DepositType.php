<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;


enum DepositType: string
{
    case BANK_GUARANTEE = 'bank-guarantee';
    case DEPOSIT_GUARANTEE = 'deposit-guarantee';
}
