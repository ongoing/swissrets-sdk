<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Dto\SwissRetsAddressDto;
use Ongoing\Swissrets\Dto\SwissRetsAvailabilityDto;
use Ongoing\Swissrets\Model\PropertyCategory;
use Ongoing\Swissrets\Model\PropertyType;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties
 *
 * TODO: Add missing fields
 * - unitReferenceId
 * - visualReferenceId
 * - externalReference
 * - minergieCertification
 * - parcelNumbers
 * - author
 * - buildingZones
 * - development
 * - bfs
 * - heating
 * - publishers
 */
final class SwissRetsPropertyDto implements SwissRetsDtoInterface
{
    private array $localizations = array();

    private array $categories = array();

    public function __construct(
        // required fields
        private string                   $id,
        private PropertyType             $type,
        private string                     $referenceId,
        private SwissRetsAvailabilityDto   $availability,

        // optional fields
        private ?\DateTimeInterface                  $modified = null,
        private ?\DateTimeInterface                  $created = null,
        private ?SwissRetsAddressDto                 $address = null,
        private ?SwissRetsPropertyCharacteristicsDto $characteristics = null,
        private ?SwissRetsPropertySellerDto          $seller = null,
        private ?SwissRetsPropertyPricesDto          $prices = null,
    ) { }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): PropertyType
    {
        return $this->type;
    }

    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    public function getAvailability(): ?SwissRetsAvailabilityDto
    {
        return $this->availability;
    }

    public function getModified(): ?\DateTimeInterface
    {
        return $this->modified;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function addCategory(PropertyCategory $category): void
    {
        $this->categories[] = $category;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addLocalization(SwissRetsPropertyLocalizationDto $localizationDto): void
    {
        $this->localizations[] = $localizationDto;
    }

    public function getLocalizations(): array
    {
        return $this->localizations;
    }

    public function getAddress(): ?SwissRetsAddressDto
    {
        return $this->address;
    }

    public function getCharacteristics(): ?SwissRetsPropertyCharacteristicsDto
    {
        return $this->characteristics;
    }
    public function getSeller(): ?SwissRetsPropertySellerDto
    {
        return $this->seller;
    }

    public function getPrices(): ?SwissRetsPropertyPricesDto
    {
        return $this->prices;
    }

    private function getCategoriesData(): array
    {
        return array_map(function(PropertyCategory $category) {
            return $category->value;
        }, $this->categories);
    }

    private function getLocalizationsData(): array
    {
        return array_map(function(SwissRetsPropertyLocalizationDto $localizationDto) {
            return $localizationDto->getData();
        }, $this->localizations);
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type->value,
            'referenceId' => $this->referenceId,
            'availability' => $this->availability->getData(),
            'localizations' => $this->getLocalizationsData(),

            'categories' => $this->getCategoriesData(),
            'modified' => $this->modified?->format(DATE_ATOM),
            'created' => $this->created?->format(DATE_ATOM),
            'address' => $this->address?->getData(),
            'characteristics' => $this->characteristics?->getData(),
            'seller' => $this->seller?->getData(),
            'prices' => $this->prices?->getData(),
        ];
    }
}
