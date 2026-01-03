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
        private SwissRetsApplicability $arePetsAllowed = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasAttic = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasBalcony = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasBuildingLawRestrictions = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasCableTv = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasCarPort = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasCarPortDouble = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasCellar = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasChargingStation = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasConnectedBuildingLand = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasDemolitionProperty = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasDishwasher = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasElevator = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasFireplace = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasFlatSharingCommunity = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasForeignQuota = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasGarage = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasGarageDouble = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasGarageUnderground = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasGardenShed = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasLakeView = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasLiftingPlatform = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasMountainView = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasNiceView = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasParking = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasPhotovoltaic = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasPlayground = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasRamp = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSteamer = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasStoreRoom = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSupplyGas = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSupplyPower = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSupplySewage = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSupplyWater = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasSwimmingPool = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasThermalSolarCollector = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasTiledStove = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasTumbleDryer = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasWashingMachine = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $hasRemoteViewings = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isChildFriendly = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isCornerHouse = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isDemolitionProperty = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isDilapidated = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isFirstOccupancy = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isGroundFloor = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isGroundFloorRaised = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isGutted = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isInNeedOfRenovation = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isInNeedOfRenovationPartially = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isLikeNew = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isMiddleHouse = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isModernized = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isNewConstruction = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isOldBuilding = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isProjection = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isQuiet = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isRefurbished = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isRefurbishedPartially = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isSecondaryResidenceAllowed = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isShellConstruction = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isSmokingAllowed = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isSunny = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isUnderRoof = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isWellTended = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $isWheelchairAccessible = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $onEvenGround = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $onHillside = SwissRetsApplicability::UNKNOWN,
        private SwissRetsApplicability $onHillsideSouth = SwissRetsApplicability::UNKNOWN,

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

    public function getAreaBalcony(): ?float
    {
        return $this->areaBalcony;
    }

    public function getAreaBwf(): ?float
    {
        return $this->areaBwf;
    }

    public function getAreaNwf(): ?float
    {
        return $this->areaNwf;
    }

    public function getAreaPropertyLand(): ?float
    {
        return $this->areaPropertyLand;
    }

    public function getAreaCellar(): ?float
    {
        return $this->areaCellar;
    }

    public function getAreaTerrace(): ?float
    {
        return $this->areaTerrace;
    }

    public function getAreaLoggia(): ?float
    {
        return $this->areaLoggia;
    }

    public function getAreaGarden(): ?float
    {
        return $this->areaGarden;
    }

    public function getAreaSiaAff(): ?float
    {
        return $this->areaSiaAff;
    }

    public function getAreaSiaAgf(): ?float
    {
        return $this->areaSiaAgf;
    }

    public function getAreaSiaAkf(): ?float
    {
        return $this->areaSiaAkf;
    }

    public function getAreaSiaAkfn(): ?float
    {
        return $this->areaSiaAkfn;
    }

    public function getAreaSiaAkft(): ?float
    {
        return $this->areaSiaAkft;
    }

    public function getAreaSiaAnf(): ?float
    {
        return $this->areaSiaAnf;
    }

    public function getAreaSiaAngf(): ?float
    {
        return $this->areaSiaAngf;
    }

    public function getAreaSiaAvf(): ?float
    {
        return $this->areaSiaAvf;
    }

    public function getAreaSiaBuf(): ?float
    {
        return $this->areaSiaBuf;
    }

    public function getAreaSiaFf(): ?float
    {
        return $this->areaSiaFf;
    }

    public function getAreaSiaGf(): ?float
    {
        return $this->areaSiaGf;
    }

    public function getAreaSiaGgf(): ?float
    {
        return $this->areaSiaGgf;
    }

    public function getAreaSiaGsf(): ?float
    {
        return $this->areaSiaGsf;
    }

    public function getAreaSiaHnf(): ?float
    {
        return $this->areaSiaHnf;
    }

    public function getAreaSiaKf(): ?float
    {
        return $this->areaSiaKf;
    }

    public function getAreaSiaKfn(): ?float
    {
        return $this->areaSiaKfn;
    }

    public function getAreaSiaKft(): ?float
    {
        return $this->areaSiaKft;
    }

    public function getAreaSiaNf(): ?float
    {
        return $this->areaSiaNf;
    }

    public function getAreaSiaNgf(): ?float
    {
        return $this->areaSiaNgf;
    }

    public function getAreaSiaNnf(): ?float
    {
        return $this->areaSiaNnf;
    }

    public function getAreaSiaUf(): ?float
    {
        return $this->areaSiaUf;
    }

    public function getAreaSiaUuf(): ?float
    {
        return $this->areaSiaUuf;
    }

    public function getAreaSiaVf(): ?float
    {
        return $this->areaSiaVf;
    }

    public function getArePetsAllowed(): SwissRetsApplicability
    {
        return $this->arePetsAllowed;
    }

    public function getHasAttic(): SwissRetsApplicability
    {
        return $this->hasAttic;
    }

    public function getHasBalcony(): SwissRetsApplicability
    {
        return $this->hasBalcony;
    }

    public function getHasBuildingLawRestrictions(): SwissRetsApplicability
    {
        return $this->hasBuildingLawRestrictions;
    }

    public function getHasCableTv(): SwissRetsApplicability
    {
        return $this->hasCableTv;
    }

    public function getHasCarPort(): SwissRetsApplicability
    {
        return $this->hasCarPort;
    }

    public function getHasCarPortDouble(): SwissRetsApplicability
    {
        return $this->hasCarPortDouble;
    }

    public function getHasCellar(): SwissRetsApplicability
    {
        return $this->hasCellar;
    }

    public function getHasChargingStation(): SwissRetsApplicability
    {
        return $this->hasChargingStation;
    }

    public function getHasConnectedBuildingLand(): SwissRetsApplicability
    {
        return $this->hasConnectedBuildingLand;
    }

    public function getHasDemolitionProperty(): SwissRetsApplicability
    {
        return $this->hasDemolitionProperty;
    }

    public function getHasDishwasher(): SwissRetsApplicability
    {
        return $this->hasDishwasher;
    }

    public function getHasElevator(): SwissRetsApplicability
    {
        return $this->hasElevator;
    }

    public function getHasFireplace(): SwissRetsApplicability
    {
        return $this->hasFireplace;
    }

    public function getHasFlatSharingCommunity(): SwissRetsApplicability
    {
        return $this->hasFlatSharingCommunity;
    }

    public function getHasForeignQuota(): SwissRetsApplicability
    {
        return $this->hasForeignQuota;
    }

    public function getHasGarage(): SwissRetsApplicability
    {
        return $this->hasGarage;
    }

    public function getHasGarageDouble(): SwissRetsApplicability
    {
        return $this->hasGarageDouble;
    }

    public function getHasGarageUnderground(): SwissRetsApplicability
    {
        return $this->hasGarageUnderground;
    }

    public function getHasGardenShed(): SwissRetsApplicability
    {
        return $this->hasGardenShed;
    }

    public function getHasLakeView(): SwissRetsApplicability
    {
        return $this->hasLakeView;
    }

    public function getHasLiftingPlatform(): SwissRetsApplicability
    {
        return $this->hasLiftingPlatform;
    }

    public function getHasMountainView(): SwissRetsApplicability
    {
        return $this->hasMountainView;
    }

    public function getHasNiceView(): SwissRetsApplicability
    {
        return $this->hasNiceView;
    }

    public function getHasParking(): SwissRetsApplicability
    {
        return $this->hasParking;
    }

    public function getHasPhotovoltaic(): SwissRetsApplicability
    {
        return $this->hasPhotovoltaic;
    }

    public function getHasPlayground(): SwissRetsApplicability
    {
        return $this->hasPlayground;
    }

    public function getHasRamp(): SwissRetsApplicability
    {
        return $this->hasRamp;
    }

    public function getHasSteamer(): SwissRetsApplicability
    {
        return $this->hasSteamer;
    }

    public function getHasStoreRoom(): SwissRetsApplicability
    {
        return $this->hasStoreRoom;
    }

    public function getHasSupplyGas(): SwissRetsApplicability
    {
        return $this->hasSupplyGas;
    }

    public function getHasSupplyPower(): SwissRetsApplicability
    {
        return $this->hasSupplyPower;
    }

    public function getHasSupplySewage(): SwissRetsApplicability
    {
        return $this->hasSupplySewage;
    }

    public function getHasSupplyWater(): SwissRetsApplicability
    {
        return $this->hasSupplyWater;
    }

    public function getHasSwimmingPool(): SwissRetsApplicability
    {
        return $this->hasSwimmingPool;
    }

    public function getHasThermalSolarCollector(): SwissRetsApplicability
    {
        return $this->hasThermalSolarCollector;
    }

    public function getHasTiledStove(): SwissRetsApplicability
    {
        return $this->hasTiledStove;
    }

    public function getHasTumbleDryer(): SwissRetsApplicability
    {
        return $this->hasTumbleDryer;
    }

    public function getHasWashingMachine(): SwissRetsApplicability
    {
        return $this->hasWashingMachine;
    }

    public function getHasRemoteViewings(): SwissRetsApplicability
    {
        return $this->hasRemoteViewings;
    }

    public function getIsChildFriendly(): SwissRetsApplicability
    {
        return $this->isChildFriendly;
    }

    public function getIsCornerHouse(): SwissRetsApplicability
    {
        return $this->isCornerHouse;
    }

    public function getIsDemolitionProperty(): SwissRetsApplicability
    {
        return $this->isDemolitionProperty;
    }

    public function getIsDilapidated(): SwissRetsApplicability
    {
        return $this->isDilapidated;
    }

    public function getIsFirstOccupancy(): SwissRetsApplicability
    {
        return $this->isFirstOccupancy;
    }

    public function getIsGroundFloor(): SwissRetsApplicability
    {
        return $this->isGroundFloor;
    }

    public function getIsGroundFloorRaised(): SwissRetsApplicability
    {
        return $this->isGroundFloorRaised;
    }

    public function getIsGutted(): SwissRetsApplicability
    {
        return $this->isGutted;
    }

    public function getIsInNeedOfRenovation(): SwissRetsApplicability
    {
        return $this->isInNeedOfRenovation;
    }

    public function getIsInNeedOfRenovationPartially(): SwissRetsApplicability
    {
        return $this->isInNeedOfRenovationPartially;
    }

    public function getIsLikeNew(): SwissRetsApplicability
    {
        return $this->isLikeNew;
    }

    public function getIsMiddleHouse(): SwissRetsApplicability
    {
        return $this->isMiddleHouse;
    }

    public function getIsModernized(): SwissRetsApplicability
    {
        return $this->isModernized;
    }

    public function getIsNewConstruction(): SwissRetsApplicability
    {
        return $this->isNewConstruction;
    }

    public function getIsOldBuilding(): SwissRetsApplicability
    {
        return $this->isOldBuilding;
    }

    public function getIsProjection(): SwissRetsApplicability
    {
        return $this->isProjection;
    }

    public function getIsQuiet(): SwissRetsApplicability
    {
        return $this->isQuiet;
    }

    public function getIsRefurbished(): SwissRetsApplicability
    {
        return $this->isRefurbished;
    }

    public function getIsRefurbishedPartially(): SwissRetsApplicability
    {
        return $this->isRefurbishedPartially;
    }

    public function getIsSecondaryResidenceAllowed(): SwissRetsApplicability
    {
        return $this->isSecondaryResidenceAllowed;
    }

    public function getIsShellConstruction(): SwissRetsApplicability
    {
        return $this->isShellConstruction;
    }

    public function getIsSmokingAllowed(): SwissRetsApplicability
    {
        return $this->isSmokingAllowed;
    }

    public function getIsSunny(): SwissRetsApplicability
    {
        return $this->isSunny;
    }

    public function getIsUnderRoof(): SwissRetsApplicability
    {
        return $this->isUnderRoof;
    }

    public function getIsWellTended(): SwissRetsApplicability
    {
        return $this->isWellTended;
    }

    public function getIsWheelchairAccessible(): SwissRetsApplicability
    {
        return $this->isWheelchairAccessible;
    }

    public function getOnEvenGround(): SwissRetsApplicability
    {
        return $this->onEvenGround;
    }

    public function getOnHillside(): SwissRetsApplicability
    {
        return $this->onHillside;
    }

    public function getOnHillsideSouth(): SwissRetsApplicability
    {
        return $this->onHillsideSouth;
    }

    public function getNumberOfBathrooms(): ?int
    {
        return $this->numberOfBathrooms;
    }

    public function getNumberOfRooms(): ?float
    {
        return $this->numberOfRooms;
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

            'arePetsAllowed' => $this->arePetsAllowed->value,
            'hasAttic' => $this->hasAttic->value,
            'hasBalcony' => $this->hasBalcony->value,
            'hasBuildingLawRestrictions' => $this->hasBuildingLawRestrictions->value,
            'hasCableTv' => $this->hasCableTv->value,
            'hasCarPort' => $this->hasCarPort->value,
            'hasCarPortDouble' => $this->hasCarPortDouble->value,
            'hasCellar' => $this->hasCellar->value,
            'hasChargingStation' => $this->hasChargingStation->value,
            'hasConnectedBuildingLand' => $this->hasConnectedBuildingLand->value,
            'hasDemolitionProperty' => $this->hasDemolitionProperty->value,
            'hasDishwasher' => $this->hasDishwasher->value,
            'hasElevator' => $this->hasElevator->value,
            'hasFireplace' => $this->hasFireplace->value,
            'hasFlatSharingCommunity' => $this->hasFlatSharingCommunity->value,
            'hasForeignQuota' => $this->hasForeignQuota->value,
            'hasGarage' => $this->hasGarage->value,
            'hasGarageDouble' => $this->hasGarageDouble->value,
            'hasGarageUnderground' => $this->hasGarageUnderground->value,
            'hasGardenShed' => $this->hasGardenShed->value,
            'hasLakeView' => $this->hasLakeView->value,
            'hasLiftingPlatform' => $this->hasLiftingPlatform->value,
            'hasMountainView' => $this->hasMountainView->value,
            'hasNiceView' => $this->hasNiceView->value,
            'hasParking' => $this->hasParking->value,
            'hasPhotovoltaic' => $this->hasPhotovoltaic->value,
            'hasPlayground' => $this->hasPlayground->value,
            'hasRamp' => $this->hasRamp->value,
            'hasSteamer' => $this->hasSteamer->value,
            'hasStoreRoom' => $this->hasStoreRoom->value,
            'hasSupplyGas' => $this->hasSupplyGas->value,
            'hasSupplyPower' => $this->hasSupplyPower->value,
            'hasSupplySewage' => $this->hasSupplySewage->value,
            'hasSupplyWater' => $this->hasSupplyWater->value,
            'hasSwimmingPool' => $this->hasSwimmingPool->value,
            'hasThermalSolarCollector' => $this->hasThermalSolarCollector->value,
            'hasTiledStove' => $this->hasTiledStove->value,
            'hasTumbleDryer' => $this->hasTumbleDryer->value,
            'hasWashingMachine' => $this->hasWashingMachine->value,
            'hasRemoteViewings' => $this->hasRemoteViewings->value,
            'isChildFriendly' => $this->isChildFriendly->value,
            'isCornerHouse' => $this->isCornerHouse->value,
            'isDemolitionProperty' => $this->isDemolitionProperty->value,
            'isDilapidated' => $this->isDilapidated->value,
            'isFirstOccupancy' => $this->isFirstOccupancy->value,
            'isGroundFloor' => $this->isGroundFloor->value,
            'isGroundFloorRaised' => $this->isGroundFloorRaised->value,
            'isGutted' => $this->isGutted->value,
            'isInNeedOfRenovation' => $this->isInNeedOfRenovation->value,
            'isInNeedOfRenovationPartially' => $this->isInNeedOfRenovationPartially->value,
            'isLikeNew' => $this->isLikeNew->value,
            'isMiddleHouse' => $this->isMiddleHouse->value,
            'isModernized' => $this->isModernized->value,
            'isNewConstruction' => $this->isNewConstruction->value,
            'isOldBuilding' => $this->isOldBuilding->value,
            'isProjection' => $this->isProjection->value,
            'isQuiet' => $this->isQuiet->value,
            'isRefurbished' => $this->isRefurbished->value,
            'isRefurbishedPartially' => $this->isRefurbishedPartially->value,
            'isSecondaryResidenceAllowed' => $this->isSecondaryResidenceAllowed->value,
            'isShellConstruction' => $this->isShellConstruction->value,
            'isSmokingAllowed' => $this->isSmokingAllowed->value,
            'isSunny' => $this->isSunny->value,
            'isUnderRoof' => $this->isUnderRoof->value,
            'isWellTended' => $this->isWellTended->value,
            'isWheelchairAccessible' => $this->isWheelchairAccessible->value,
            'onEvenGround' => $this->onEvenGround->value,
            'onHillside' => $this->onHillside->value,
            'onHillsideSouth' => $this->onHillsideSouth->value,

            'numberOfBathrooms' => $this->numberOfBathrooms,
            'numberOfRooms' => $this->numberOfRooms,
        ];
    }
}
