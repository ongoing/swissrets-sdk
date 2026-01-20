<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;

use Ongoing\Swissrets\Dto\Address\SwissRetsAddressDto;
use Ongoing\Swissrets\Dto\Address\SwissRetsGeoDto;
use Ongoing\Swissrets\Dto\Property\SwissRetsPropertyCharacteristicsDto;
use Ongoing\Swissrets\Dto\Property\SwissRetsPropertyDto;
use Ongoing\Swissrets\Dto\Property\SwissRetsPropertyPricesDto;
use Ongoing\Swissrets\Dto\Property\SwissRetsPropertySellerDto;
use Ongoing\Swissrets\Dto\Utility\SwissRetsApplicability;
use Ongoing\Swissrets\Dto\Utility\SwissRetsAvailabilityDto;
use Ongoing\Swissrets\Model\AvailabilityState;
use Ongoing\Swissrets\Model\PropertyType;
use Ongoing\Swissrets\Validator\SwissRetsValidator;


final class ExampleBuilder
{
    public static function generateExampleExport(): SwissRetsExportDto
    {
        $swissRetsExportDto = new SwissRetsExportDto(
            generatorName: 'Example User',
            generatorVersion: '1.0',
            created: new \DateTimeImmutable(),
        );

        self::addExampleProperty($swissRetsExportDto);

        return $swissRetsExportDto;
    }

    public static function addExampleProperty(SwissRetsExportDto $swissRetsExportDto): void
    {
        $availabilityDto = new SwissRetsAvailabilityDto(
            state: AvailabilityState::ACTIVE,
            start: new \DateTimeImmutable(),
            expiration: new \DateTimeImmutable("+1 year"),
        );

        $geoDto = new SwissRetsGeoDto(
            latitude: 46.94656864691579,
            longitude: 7.444262139674791,
            elevation: 555,
        );

        $addressDto = new SwissRetsAddressDto(
            countryCode        : "CH",
            locality           : "Locality",
            region             : "Region",
            postalCode         : "1234",
            postOfficeBoxNumber: "postbox1234",
            street             : "Examplestreet",
            streetNumber       : "1",
            streetAddition     : "Addition",
            subunit            : 1,
            geo                : $geoDto,
        );

        $characteristicsDto = new SwissRetsPropertyCharacteristicsDto(
            areaBalcony: 12.5,
            numberOfRooms: 3.5,
            hasBalcony: SwissRetsApplicability::APPLIES,
            arePetsAllowed: SwissRetsApplicability::DOES_NOT_APPLY
        );
        
        // $sellerDto = new SwissRetsPropertySellerDto();
        // $pricesDto = new SwissRetsPropertyPricesDto();

        $propertyDto = new SwissRetsPropertyDto(
            id: '1.0',
            type: PropertyType::BUY,
            referenceId: '1',
            availability: $availabilityDto,
            modified: new \DateTimeImmutable(),
            created: new \DateTimeImmutable(),
            address: $addressDto,
            characteristics: $characteristicsDto,
            // seller: $sellerDto,
            // prices: $pricesDto,
        );

        $swissRetsExportDto->addProperty($propertyDto);
    }

    /**
     * @deprecated - use SwissRetsValidator::validateExportDto directly instead
     */
    public static function validate(SwissRetsExportDto $dto): array
    {
        return SwissRetsValidator::validateExportDto($dto);
    }
}
