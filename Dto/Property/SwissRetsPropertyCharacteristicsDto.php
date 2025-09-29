<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_characteristics
 *
 * TODO: Add missing fields
arePetsAllowed
ceilingHeight
craneCapacity
elevatorLoad
floor
floorLoad
grossPremium
hallHeight
hasAttic
hasBalcony
hasBuildingLawRestrictions
hasCableTv
hasCarPort
hasCarPortDouble
hasCellar
hasChargingStation
hasConnectedBuildingLand
hasDemolitionProperty
hasDishwasher
hasElevator
hasEvChargingStation
hasFiberOptic
hasFireplace
hasFlatSharingCommunity
hasForeignQuota
hasGarage
hasGarageDouble
hasGarageUnderground
hasGardenShed
hasLakeView
hasLiftingPlatform
hasMountainView
hasMultimediaWiring
hasNiceView
hasParking
hasPhotovoltaic
hasPlayground
hasRamp
hasSteamer
hasStoreRoom
hasSupplyGas
hasSupplyPower
hasSupplySewage
hasSupplyWater
hasSwimmingPool
hasThermalSolarCollector
hasTiledStove
hasTumbleDryer
hasWashingMachine
hasRemoteViewings
isChildFriendly
isCornerHouse
isDemolitionProperty
isDilapidated
isFirstOccupancy
isGroundFloor
isGroundFloorRaised
isGutted
isInNeedOfRenovation
isInNeedOfRenovationPartially
isLikeNew
isMiddleHouse
isModernized
isNewConstruction
isOldBuilding
isProjection
isQuiet
isRefurbished
isRefurbishedPartially
isSecondaryResidenceAllowed
isShellConstruction
isSmokingAllowed
isSunny
isTemporaryUse
isUnderRoof
isWellTended
isWheelchairAccessible
numberOfApartements
numberOfFloors
numberOfParcels
numberOfShowers
numberOfToilets
numberOfToiletsGuest
onEvenGround
onHillside
onHillsideSouth
utilizationRatio
utilizationRatioConstruction
volumeGva
volumeSia
volumeSia116Gv
volumeSiaAfv
volumeSiaAkv
volumeSiaAngv
volumeSiaAnv
volumeSiaAvv
volumeSiaGv
yearBuilt
yearLastRenovated
 */
final class SwissRetsPropertyCharacteristicsDto implements SwissRetsDtoInterface
{
    public function __construct(
        // optional fields
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

    public function getAreaBwf(): ?float
    {
        return $this->areaBwf;
    }

    public function getAreaBalcony(): ?float
    {
        return $this->areaBalcony;
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
            
            'numberOfBathrooms' => $this->numberOfBathrooms,
            'numberOfRooms' => $this->numberOfRooms,
        ];
    }
}
