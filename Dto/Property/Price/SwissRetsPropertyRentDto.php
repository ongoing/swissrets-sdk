<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property\Price;



use Ongoing\Swissrets\Model\PriceInterval;
use Ongoing\Swissrets\Model\PriceReferring;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices_rent
 */
final readonly class SwissRetsPropertyRentDto implements SwissRetsDtoInterface
{
    public function __construct(
        // optional fields
        private ?int            $gross = null,
        private ?int            $net = null,
        private ?int            $extra = null,
        private ?PriceInterval  $interval = null,
        private ?PriceReferring $referring = null,
    ) {
        if ($this->gross !== null && $this->gross < 0) {
            throw new \Exception("Gross must be greater or equal to 0");
        }
        if ($this->net !== null && $this->net < 0) {
            throw new \Exception("Net must be greater or equal to 0");
        }
        if ($this->extra !== null && $this->extra < 0) {
            throw new \Exception("Extra must be greater or equal to 0");
        }
    }

    public function getGross(): ?int
    {
        return $this->gross;
    }

    public function getNet(): ?int
    {
        return $this->net;
    }

    public function getExtra(): ?int
    {
        return $this->extra;
    }

    public function getInterval(): ?PriceInterval
    {
        return $this->interval;
    }

    public function getReferring(): ?PriceReferring
    {
        return $this->referring;
    }

    public function getData(): array
    {
        return [
            'gross' => $this->gross,
            'net' => $this->net,
            'extra' => $this->extra,
            'interval' => $this->interval?->value,
            'referring' => $this->referring?->value,
        ];
    }
}
