<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Dto\Property\Price\SwissRetsPropertyAdditionalOfferDto;
use Ongoing\Swissrets\Dto\Property\Price\SwissRetsPropertyAuctionDto;
use Ongoing\Swissrets\Dto\Property\Price\SwissRetsPropertyBuyDto;
use Ongoing\Swissrets\Dto\Property\Price\SwissRetsPropertyDepositDto;
use Ongoing\Swissrets\Dto\Property\Price\SwissRetsPropertyRentDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices
 *
 * TODO: Add missing fields
 * - additionalOffers
 */
final class SwissRetsPropertyPricesDto implements SwissRetsDtoInterface
{
    private array $additionalOffers = array();

    public function __construct(
        // optional fields
        private readonly ?string                      $currency = null,
        private readonly ?SwissRetsPropertyRentDto    $rent = null,
        private readonly ?SwissRetsPropertyBuyDto     $buy = null,
        private readonly ?SwissRetsPropertyAuctionDto $auction = null,
        private readonly ?SwissRetsPropertyDepositDto $deposit = null,
    ) {
        if ($currency !== null && !preg_match('/^[A-Z]{3}$/', $currency)) {
            throw new \Exception("Invalid currency: ".$currency);
        }
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getRent(): ?SwissRetsPropertyRentDto
    {
        return $this->rent;
    }

    public function getBuy(): ?SwissRetsPropertyBuyDto
    {
        return $this->buy;
    }

    public function getAuction(): ?SwissRetsPropertyAuctionDto
    {
        return $this->auction;
    }

    public function getDeposit(): ?SwissRetsPropertyDepositDto
    {
        return $this->deposit;
    }

    public function getAdditionalOffers(): array
    {
        return $this->additionalOffers;
    }

    public function addAdditionalOffers(SwissRetsPropertyAdditionalOfferDto $additionalOfferDto): static
    {
        $this->additionalOffers[] = $additionalOfferDto;
        return $this;
    }

    public function getAdditionalOffersData(): array
    {
        return array_map(function(SwissRetsPropertyAdditionalOfferDto $additionalOffer) {
            return $additionalOffer->value;
        }, $this->additionalOffers);
    }

    public function getData(): array
    {
        return [
            'currency' => $this->currency,
            'rent' => $this->rent?->getData(),
            'buy' => $this->buy?->getData(),
            'auction' => $this->auction?->getData(),
            'deposit' => $this->deposit?->getData(),
            'additionalOffers' => $this->getAdditionalOffersData(),
        ];
    }
}
