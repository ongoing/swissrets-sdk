<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property\Price;



use Ongoing\Swissrets\Model\AdditionalOfferType;
use Ongoing\Swissrets\Model\PriceInterval;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices_additionalOffers
 */
final readonly class SwissRetsPropertyAdditionalOfferDto implements SwissRetsDtoInterface
{
    public function __construct(
        // required fields
        private int $price,
        private AdditionalOfferType $type,

        // optional fields
        private ?PriceInterval $interval = null,
    ) {
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getType(): AdditionalOfferType
    {
        return $this->type;
    }

    public function getInterval(): ?PriceInterval
    {
        return $this->interval;
    }

    public function getData(): array
    {
        return [
            'price' => $this->price,
            'type' => $this->type,
            'interval' => $this->interval?->value,
        ];
    }
}
