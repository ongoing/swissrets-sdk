<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Utility;



use Ongoing\Swissrets\Model\AvailabilityState;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller_organization_address
 */
final readonly class SwissRetsAvailabilityDto implements SwissRetsDtoInterface
{
    public function __construct(
        private AvailabilityState   $state,
        private ?\DateTimeInterface $start = null,
        private ?\DateTimeInterface $expiration = null,
    ) { }

    public function getState(): ?AvailabilityState
    {
        return $this->state;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function getExpiration(): ?\DateTimeInterface
    {
        return $this->expiration;
    }

    public function getData(): array
    {
        return array(
            'state' => $this->state->value,
            'start' => $this->start?->format(DATE_ATOM),
            'expiration' => $this->expiration?->format(DATE_ATOM),
        );
    }
}
