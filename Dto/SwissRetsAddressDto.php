<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller_organization_address
 */
final readonly class SwissRetsAddressDto implements SwissRetsDtoInterface
{
    public function __construct(
        private ?string          $countryCode = null,
        private ?string          $locality = null,
        private ?string          $region = null,
        private ?string          $postalCode = null,
        private ?string          $postOfficeBoxNumber = null,
        private ?string          $street = null,
        private ?string          $streetNumber = null,
        private ?string          $streetAddition = null,
        private ?int             $subunit = null,
        private ?SwissRetsGeoDto $geo = null,
    ) {
        if (!preg_match('/^[A-Z]{2}$/', $countryCode)) {
            throw new \Exception("Invalid CountryCode: ".$this->countryCode);
        }
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function getPostOfficeBoxNumber(): ?string
    {
        return $this->postOfficeBoxNumber;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function getStreetAddition(): ?string
    {
        return $this->streetAddition;
    }

    public function getSubunit(): ?int
    {
        return $this->subunit;
    }

    public function getGeo(): ?SwissRetsGeoDto
    {
        return $this->geo;
    }

    public function getData(): array
    {
        return array(
            'countryCode' => $this->countryCode,
            'locality' => $this->locality,
            'region' => $this->region,
            'postalCode' => $this->postalCode,
            'postOfficeBoxNumber' => $this->postOfficeBoxNumber,
            'street' => $this->street,
            'streetNumber' => $this->streetNumber,
            'streetAddition' => $this->streetAddition,
            'subunit' => $this->subunit,
            'geo' => $this->geo?->getData(),
        );
    }
}
