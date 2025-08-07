<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Address;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller_organization_address_geo
 */
final readonly class SwissRetsGeoDto implements SwissRetsDtoInterface
{
    public function __construct(
        private float  $latitude,
        private float  $longitude,
        private ?float $elevation = null,
    ) { }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function getElevation(): ?float
    {
        return $this->elevation;
    }

    public function getData(): array
    {
        return array(
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'elevation' => $this->elevation,
        );
    }
}
