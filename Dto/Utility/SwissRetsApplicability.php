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

    public function toTriState(): ?bool
    {
        return match ($this) {
            self::APPLIES => true,
            self::DOES_NOT_APPLY => false,
            self::UNKNOWN => null,
        };
    }
}
