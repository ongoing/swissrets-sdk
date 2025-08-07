<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property\Price;



use Ongoing\Swissrets\Model\PriceReferring;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices_buy
 */
final readonly class SwissRetsPropertyBuyDto implements SwissRetsDtoInterface
{
    public function __construct(
        // optional fields
        private ?int            $price = null,
        private ?int            $extra = null,
        private ?float          $wirPercentage = null,
        private ?PriceReferring $referring = null,
    ) {
        if ($this->price !== null && $this->price < 0) {
            throw new \Exception("Price must be greater or equal to 0");
        }
        if ($this->extra !== null && $this->extra < 0) {
            throw new \Exception("Extra must be greater or equal to 0");
        }
        if ($this->wirPercentage !== null && ($this->wirPercentage < 0 || $this->wirPercentage > 100)) {
            throw new \Exception("WirPercentage must be greater or equal to 0 and lesser or equal to 100");
        }
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function getExtra(): ?int
    {
        return $this->extra;
    }

    public function getWirPercentage(): ?float
    {
        return $this->wirPercentage;
    }

    public function getReferring(): ?PriceReferring
    {
        return $this->referring;
    }

    public function getData(): array
    {
        return [
            'price' => $this->price,
            'extra' => $this->extra,
            'wirPercentage' => $this->wirPercentage,
            'referring' => $this->referring?->value,
        ];
    }
}
