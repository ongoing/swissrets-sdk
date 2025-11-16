<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;

use Ongoing\Swissrets\Dto\Utility\SwissRetsApplicability;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;

/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_characteristics
 *
 * TODO: Add missing numeric fields
 * ceilingHeight
 * craneCapacity
 * elevatorLoad
 * floor
 * floorLoad
 * grossPremium
 * hallHeight
 * numberOfApartements
 * numberOfFloors
 * numberOfParcels
 * numberOfShowers
 * numberOfToilets
 * numberOfToiletsGuest
 * utilizationRatio
 * utilizationRatioConstruction
 * volumeGva
 * volumeSia
 * volumeSia116Gv
 * volumeSiaAfv
 * volumeSiaAkv
 * volumeSiaAngv
 * volumeSiaAnv
 * volumeSiaAvv
 * volumeSiaGv
 * yearBuilt
 * yearLastRenovated
 */
final class SwissRetsPropertyCharacteristicsDto implements SwissRetsDtoInterface
{
    public function __construct(
        // optional area / numeric fields
        private ?float $areaBalcony = null,
        private ?float $areaBwf = null,
        private ?float $areaNwf = null,
        private ?float $areaPropertyLand = null,
        private ?float $areaCellar = null,
        private ?float $areaTerrace = null,
        private ?float $areaLoggia = null,
        private ?float $areaGarden = null,
        private ?float $areaSiaAff = null,
        private ?float $areaSiaAgf = null,
        private ?float $areaSiaAkf = null,
        private ?float $areaSiaAkfn = null,
        private ?float $areaSiaAkft = null,
        private ?float $areaSiaAnf = null,
        private ?float $areaSiaAngf = null,
        private ?float $areaSiaAvf = null,
        private ?float $areaSiaBuf = null,
        private ?float $areaSiaFf = null,
        private ?float $areaSiaGf = null,
        private ?float $areaSiaGgf = null,
        private ?float $areaSiaGsf = null,
        private ?float $areaSiaHnf = null,
        private ?float $areaSiaKf = null,
        private ?float $areaSiaKfn = null,
        private ?float $areaSiaKft = null,
        private ?float $areaSiaNf = null,
        private ?float $areaSiaNgf = null,
        private ?float $areaSiaNnf = null,
        private ?float $areaSiaUf = null,
        private ?float $areaSiaUuf = null,
        private ?float $areaSiaVf = null,

        // tri-state / applicable fields (bool|null → applies / does-not-apply / unknown)
        private ?bool $arePetsAllowed = null,
        private ?bool $hasAttic = null,
        private ?bool $hasBalcony = null,
        private ?bool $hasBuildingLawRestrictions = null,
        private ?bool $hasCableTv = null,
        private ?bool $hasCarPort = null,
        private ?bool $hasCarPortDouble = null,
        private ?bool $hasCellar = null,
        private ?bool $hasChargingStation = null,
        private ?bool $hasConnectedBuildingLand = null,
        private ?bool $hasDemolitionProperty = null,
        private ?bool $hasDishwasher = null,
        private ?bool $hasElevator = null,
        private ?bool $hasFireplace = null,
        private ?bool $hasFlatSharingCommunity = null,
        private ?bool $hasForeignQuota = null,
        private ?bool $hasGarage = null,
        private ?bool $hasGarageDouble = null,
        private ?bool $hasGarageUnderground = null,
        private ?bool $hasGardenShed = null,
        private ?bool $hasLakeView = null,
        private ?bool $hasLiftingPlatform = null,
        private ?bool $hasMountainView = null,
        private ?bool $hasNiceView = null,
        private ?bool $hasParking = null,
        private ?bool $hasPhotovoltaic = null,
        private ?bool $hasPlayground = null,
        private ?bool $hasRamp = null,
        private ?bool $hasSteamer = null,
        private ?bool $hasStoreRoom = null,
        private ?bool $hasSupplyGas = null,
        private ?bool $hasSupplyPower = null,
        private ?bool $hasSupplySewage = null,
        private ?bool $hasSupplyWater = null,
        private ?bool $hasSwimmingPool = null,
        private ?bool $hasThermalSolarCollector = null,
        private ?bool $hasTiledStove = null,
        private ?bool $hasTumbleDryer = null,
        private ?bool $hasWashingMachine = null,
        private ?bool $hasRemoteViewings = null,
        private ?bool $isChildFriendly = null,
        private ?bool $isCornerHouse = null,
        private ?bool $isDemolitionProperty = null,
        private ?bool $isDilapidated = null,
        private ?bool $isFirstOccupancy = null,
        private ?bool $isGroundFloor = null,
        private ?bool $isGroundFloorRaised = null,
        private ?bool $isGutted = null,
        private ?bool $isInNeedOfRenovation = null,
        private ?bool $isInNeedOfRenovationPartially = null,
        private ?bool $isLikeNew = null,
        private ?bool $isMiddleHouse = null,
        private ?bool $isModernized = null,
        private ?bool $isNewConstruction = null,
        private ?bool $isOldBuilding = null,
        private ?bool $isProjection = null,
        private ?bool $isQuiet = null,
        private ?bool $isRefurbished = null,
        private ?bool $isRefurbishedPartially = null,
        private ?bool $isSecondaryResidenceAllowed = null,
        private ?bool $isShellConstruction = null,
        private ?bool $isSmokingAllowed = null,
        private ?bool $isSunny = null,
        private ?bool $isUnderRoof = null,
        private ?bool $isWellTended = null,
        private ?bool $isWheelchairAccessible = null,
        private ?bool $onEvenGround = null,
        private ?bool $onHillside = null,
        private ?bool $onHillsideSouth = null,

        // counts
        private ?int $numberOfBathrooms = null,
        private ?float $numberOfRooms = null,
    ) {
        if ($this->areaBalcony !== null && $this->areaBalcony < 0) {
            throw new \Exception("AreaBalcony must be greater or equal to 0");
        }
        if ($this->areaBwf !== null && $this->areaBwf < 0) {
            throw new \Exception("AreaBwf must be greater or equal to 0");
        }
        if ($this->areaNwf !== null && $this->areaNwf < 0) {
            throw new \Exception("AreaNwf must be greater or equal to 0");
        }
        if ($this->areaPropertyLand !== null && $this->areaPropertyLand < 0) {
            throw new \Exception("AreaPropertyLand must be greater or equal to 0");
        }
        if ($this->areaCellar !== null && $this->areaCellar < 0) {
            throw new \Exception("AreaCellar must be greater or equal to 0");
        }
        if ($this->areaTerrace !== null && $this->areaTerrace < 0) {
            throw new \Exception("AreaTerrace must be greater or equal to 0");
        }
        if ($this->areaLoggia !== null && $this->areaLoggia < 0) {
            throw new \Exception("AreaLoggia must be greater or equal to 0");
        }
        if ($this->areaGarden !== null && $this->areaGarden < 0) {
            throw new \Exception("AreaGarden must be greater or equal to 0");
        }
        if ($this->areaSiaAff !== null && $this->areaSiaAff < 0) {
            throw new \Exception("AreaSiaAff must be greater or equal to 0");
        }
        if ($this->areaSiaAgf !== null && $this->areaSiaAgf < 0) {
            throw new \Exception("AreaSiaAgf must be greater or equal to 0");
        }
        if ($this->areaSiaAkf !== null && $this->areaSiaAkf < 0) {
            throw new \Exception("AreaSiaAkf must be greater or equal to 0");
        }
        if ($this->areaSiaAkfn !== null && $this->areaSiaAkfn < 0) {
            throw new \Exception("AreaSiaAkfn must be greater or equal to 0");
        }
        if ($this->areaSiaAkft !== null && $this->areaSiaAkft < 0) {
            throw new \Exception("AreaSiaAkft must be greater or equal to 0");
        }
        if ($this->areaSiaAnf !== null && $this->areaSiaAnf < 0) {
            throw new \Exception("AreaSiaAnf must be greater or equal to 0");
        }
        if ($this->areaSiaAngf !== null && $this->areaSiaAngf < 0) {
            throw new \Exception("AreaSiaAngf must be greater or equal to 0");
        }
        if ($this->areaSiaAvf !== null && $this->areaSiaAvf < 0) {
            throw new \Exception("AreaSiaAvf must be greater or equal to 0");
        }
        if ($this->areaSiaBuf !== null && $this->areaSiaBuf < 0) {
            throw new \Exception("AreaSiaBuf must be greater or equal to 0");
        }
        if ($this->areaSiaFf !== null && $this->areaSiaFf < 0) {
            throw new \Exception("AreaSiaFf must be greater or equal to 0");
        }
        if ($this->areaSiaGf !== null && $this->areaSiaGf < 0) {
            throw new \Exception("AreaSiaGf must be greater or equal to 0");
        }
        if ($this->areaSiaGgf !== null && $this->areaSiaGgf < 0) {
            throw new \Exception("AreaSiaGgf must be greater or equal to 0");
        }
        if ($this->areaSiaGsf !== null && $this->areaSiaGsf < 0) {
            throw new \Exception("AreaSiaGsf must be greater or equal to 0");
        }
        if ($this->areaSiaHnf !== null && $this->areaSiaHnf < 0) {
            throw new \Exception("AreaSiaHnf must be greater or equal to 0");
        }
        if ($this->areaSiaKf !== null && $this->areaSiaKf < 0) {
            throw new \Exception("AreaSiaKf must be greater or equal to 0");
        }
        if ($this->areaSiaKfn !== null && $this->areaSiaKfn < 0) {
            throw new \Exception("AreaSiaKfn must be greater or equal to 0");
        }
        if ($this->areaSiaKft !== null && $this->areaSiaKft < 0) {
            throw new \Exception("AreaSiaKft must be greater or equal to 0");
        }
        if ($this->areaSiaNf !== null && $this->areaSiaNf < 0) {
            throw new \Exception("AreaSiaNf must be greater or equal to 0");
        }
        if ($this->areaSiaNgf !== null && $this->areaSiaNgf < 0) {
            throw new \Exception("AreaSiaNgf must be greater or equal to 0");
        }
        if ($this->areaSiaNnf !== null && $this->areaSiaNnf < 0) {
            throw new \Exception("AreaSiaNnf must be greater or equal to 0");
        }
        if ($this->areaSiaUf !== null && $this->areaSiaUf < 0) {
            throw new \Exception("AreaSiaUf must be greater or equal to 0");
        }
        if ($this->areaSiaUuf !== null && $this->areaSiaUuf < 0) {
            throw new \Exception("AreaSiaUuf must be greater or equal to 0");
        }
        if ($this->areaSiaVf !== null && $this->areaSiaVf < 0) {
            throw new \Exception("AreaSiaVf must be greater or equal to 0");
        }

        if ($this->numberOfBathrooms !== null && $this->numberOfBathrooms < 0) {
            throw new \Exception("NumberOfBathrooms must be greater or equal to 0");
        }
        if ($this->numberOfRooms !== null && $this->numberOfRooms < 0) {
            throw new \Exception("NumberOfRooms must be greater or equal to 0");
        }
    }

    public function getData(): array
    {
        return [
            'areaBalcony' => $this->areaBalcony,
            'areaBwf' => $this->areaBwf,
            'areaNwf' => $this->areaNwf,
            'areaPropertyLand' => $this->areaPropertyLand,
            'areaCellar' => $this->areaCellar,
            'areaTerrace' => $this->areaTerrace,
            'areaLoggia' => $this->areaLoggia,
            'areaGarden' => $this->areaGarden,
            'areaSiaAff' => $this->areaSiaAff,
            'areaSiaAgf' => $this->areaSiaAgf,
            'areaSiaAkf' => $this->areaSiaAkf,
            'areaSiaAkfn' => $this->areaSiaAkfn,
            'areaSiaAkft' => $this->areaSiaAkft,
            'areaSiaAnf' => $this->areaSiaAnf,
            'areaSiaAngf' => $this->areaSiaAngf,
            'areaSiaAvf' => $this->areaSiaAvf,
            'areaSiaBuf' => $this->areaSiaBuf,
            'areaSiaFf' => $this->areaSiaFf,
            'areaSiaGf' => $this->areaSiaGf,
            'areaSiaGgf' => $this->areaSiaGgf,
            'areaSiaGsf' => $this->areaSiaGsf,
            'areaSiaHnf' => $this->areaSiaHnf,
            'areaSiaKf' => $this->areaSiaKf,
            'areaSiaKfn' => $this->areaSiaKfn,
            'areaSiaKft' => $this->areaSiaKft,
            'areaSiaNf' => $this->areaSiaNf,
            'areaSiaNgf' => $this->areaSiaNgf,
            'areaSiaNnf' => $this->areaSiaNnf,
            'areaSiaUf' => $this->areaSiaUf,
            'areaSiaUuf' => $this->areaSiaUuf,
            'areaSiaVf' => $this->areaSiaVf,

            'arePetsAllowed' => SwissRetsApplicability::fromTriState($this->arePetsAllowed)->value,
            'hasAttic' => SwissRetsApplicability::fromTriState($this->hasAttic)->value,
            'hasBalcony' => SwissRetsApplicability::fromTriState($this->hasBalcony)->value,
            'hasBuildingLawRestrictions' => SwissRetsApplicability::fromTriState($this->hasBuildingLawRestrictions)->value,
            'hasCableTv' => SwissRetsApplicability::fromTriState($this->hasCableTv)->value,
            'hasCarPort' => SwissRetsApplicability::fromTriState($this->hasCarPort)->value,
            'hasCarPortDouble' => SwissRetsApplicability::fromTriState($this->hasCarPortDouble)->value,
            'hasCellar' => SwissRetsApplicability::fromTriState($this->hasCellar)->value,
            'hasChargingStation' => SwissRetsApplicability::fromTriState($this->hasChargingStation)->value,
            'hasConnectedBuildingLand' => SwissRetsApplicability::fromTriState($this->hasConnectedBuildingLand)->value,
            'hasDemolitionProperty' => SwissRetsApplicability::fromTriState($this->hasDemolitionProperty)->value,
            'hasDishwasher' => SwissRetsApplicability::fromTriState($this->hasDishwasher)->value,
            'hasElevator' => SwissRetsApplicability::fromTriState($this->hasElevator)->value,
            'hasFireplace' => SwissRetsApplicability::fromTriState($this->hasFireplace)->value,
            'hasFlatSharingCommunity' => SwissRetsApplicability::fromTriState($this->hasFlatSharingCommunity)->value,
            'hasForeignQuota' => SwissRetsApplicability::fromTriState($this->hasForeignQuota)->value,
            'hasGarage' => SwissRetsApplicability::fromTriState($this->hasGarage)->value,
            'hasGarageDouble' => SwissRetsApplicability::fromTriState($this->hasGarageDouble)->value,
            'hasGarageUnderground' => SwissRetsApplicability::fromTriState($this->hasGarageUnderground)->value,
            'hasGardenShed' => SwissRetsApplicability::fromTriState($this->hasGardenShed)->value,
            'hasLakeView' => SwissRetsApplicability::fromTriState($this->hasLakeView)->value,
            'hasLiftingPlatform' => SwissRetsApplicability::fromTriState($this->hasLiftingPlatform)->value,
            'hasMountainView' => SwissRetsApplicability::fromTriState($this->hasMountainView)->value,
            'hasNiceView' => SwissRetsApplicability::fromTriState($this->hasNiceView)->value,
            'hasParking' => SwissRetsApplicability::fromTriState($this->hasParking)->value,
            'hasPhotovoltaic' => SwissRetsApplicability::fromTriState($this->hasPhotovoltaic)->value,
            'hasPlayground' => SwissRetsApplicability::fromTriState($this->hasPlayground)->value,
            'hasRamp' => SwissRetsApplicability::fromTriState($this->hasRamp)->value,
            'hasSteamer' => SwissRetsApplicability::fromTriState($this->hasSteamer)->value,
            'hasStoreRoom' => SwissRetsApplicability::fromTriState($this->hasStoreRoom)->value,
            'hasSupplyGas' => SwissRetsApplicability::fromTriState($this->hasSupplyGas)->value,
            'hasSupplyPower' => SwissRetsApplicability::fromTriState($this->hasSupplyPower)->value,
            'hasSupplySewage' => SwissRetsApplicability::fromTriState($this->hasSupplySewage)->value,
            'hasSupplyWater' => SwissRetsApplicability::fromTriState($this->hasSupplyWater)->value,
            'hasSwimmingPool' => SwissRetsApplicability::fromTriState($this->hasSwimmingPool)->value,
            'hasThermalSolarCollector' => SwissRetsApplicability::fromTriState($this->hasThermalSolarCollector)->value,
            'hasTiledStove' => SwissRetsApplicability::fromTriState($this->hasTiledStove)->value,
            'hasTumbleDryer' => SwissRetsApplicability::fromTriState($this->hasTumbleDryer)->value,
            'hasWashingMachine' => SwissRetsApplicability::fromTriState($this->hasWashingMachine)->value,
            'hasRemoteViewings' => SwissRetsApplicability::fromTriState($this->hasRemoteViewings)->value,
            'isChildFriendly' => SwissRetsApplicability::fromTriState($this->isChildFriendly)->value,
            'isCornerHouse' => SwissRetsApplicability::fromTriState($this->isCornerHouse)->value,
            'isDemolitionProperty' => SwissRetsApplicability::fromTriState($this->isDemolitionProperty)->value,
            'isDilapidated' => SwissRetsApplicability::fromTriState($this->isDilapidated)->value,
            'isFirstOccupancy' => SwissRetsApplicability::fromTriState($this->isFirstOccupancy)->value,
            'isGroundFloor' => SwissRetsApplicability::fromTriState($this->isGroundFloor)->value,
            'isGroundFloorRaised' => SwissRetsApplicability::fromTriState($this->isGroundFloorRaised)->value,
            'isGutted' => SwissRetsApplicability::fromTriState($this->isGutted)->value,
            'isInNeedOfRenovation' => SwissRetsApplicability::fromTriState($this->isInNeedOfRenovation)->value,
            'isInNeedOfRenovationPartially' => SwissRetsApplicability::fromTriState($this->isInNeedOfRenovationPartially)->value,
            'isLikeNew' => SwissRetsApplicability::fromTriState($this->isLikeNew)->value,
            'isMiddleHouse' => SwissRetsApplicability::fromTriState($this->isMiddleHouse)->value,
            'isModernized' => SwissRetsApplicability::fromTriState($this->isModernized)->value,
            'isNewConstruction' => SwissRetsApplicability::fromTriState($this->isNewConstruction)->value,
            'isOldBuilding' => SwissRetsApplicability::fromTriState($this->isOldBuilding)->value,
            'isProjection' => SwissRetsApplicability::fromTriState($this->isProjection)->value,
            'isQuiet' => SwissRetsApplicability::fromTriState($this->isQuiet)->value,
            'isRefurbished' => SwissRetsApplicability::fromTriState($this->isRefurbished)->value,
            'isRefurbishedPartially' => SwissRetsApplicability::fromTriState($this->isRefurbishedPartially)->value,
            'isSecondaryResidenceAllowed' => SwissRetsApplicability::fromTriState($this->isSecondaryResidenceAllowed)->value,
            'isShellConstruction' => SwissRetsApplicability::fromTriState($this->isShellConstruction)->value,
            'isSmokingAllowed' => SwissRetsApplicability::fromTriState($this->isSmokingAllowed)->value,
            'isSunny' => SwissRetsApplicability::fromTriState($this->isSunny)->value,
            'isUnderRoof' => SwissRetsApplicability::fromTriState($this->isUnderRoof)->value,
            'isWellTended' => SwissRetsApplicability::fromTriState($this->isWellTended)->value,
            'isWheelchairAccessible' => SwissRetsApplicability::fromTriState($this->isWheelchairAccessible)->value,
            'onEvenGround' => SwissRetsApplicability::fromTriState($this->onEvenGround)->value,
            'onHillside' => SwissRetsApplicability::fromTriState($this->onHillside)->value,
            'onHillsideSouth' => SwissRetsApplicability::fromTriState($this->onHillsideSouth)->value,

            'numberOfBathrooms' => $this->numberOfBathrooms,
            'numberOfRooms' => $this->numberOfRooms,
        ];
    }
}
