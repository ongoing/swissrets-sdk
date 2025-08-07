<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property\Price;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices_auction
 */
final readonly class SwissRetsPropertyAuctionDto implements SwissRetsDtoInterface
{
    public function __construct(
        // required fields
        private int                $startPrice,
        private \DateTimeInterface $startDate,
        private \DateTimeInterface $expiration,
    ) {
    }

    public function getStartPrice(): int
    {
        return $this->startPrice;
    }

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function getExpiration(): \DateTimeInterface
    {
        return $this->expiration;
    }

    public function getData(): array
    {
        return [
            'startPrice' => $this->startPrice,
            'startDate' => $this->startDate?->format(DATE_ATOM),
            'expiration' => $this->expiration?->format(DATE_ATOM),
        ];
    }
}
