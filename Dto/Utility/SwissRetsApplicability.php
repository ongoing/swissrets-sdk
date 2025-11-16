<?php

namespace Ongoing\Swissrets\Dto\Utility;

enum SwissRetsApplicability: string
{
    case APPLIES = 'applies';
    case DOES_NOT_APPLY = 'does-not-apply';
    case UNKNOWN = 'unknown';

    public static function fromTriState(?bool $value): self
    {
        return match ($value) {
            true  => self::APPLIES,
            false => self::DOES_NOT_APPLY,
            null  => self::UNKNOWN,
        };
    }
}
