<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Dto\SwissRetsAddressDto;
use Ongoing\Swissrets\Dto\SwissRetsAvailabilityDto;
use Ongoing\Swissrets\Model\PropertyCategory;
use Ongoing\Swissrets\Model\PropertyType;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_characteristics
 *
 * TODO: Add missing fields
areaBwf
areaNwf
areaPropertyLand
areaCellar
areaBalcony
areaTerrace
areaLoggia
areaGarden
areaSiaAff
areaSiaAgf
areaSiaAkf
areaSiaAkfn
areaSiaAkft
areaSiaAnf
areaSiaAngf
areaSiaAvf
areaSiaBuf
areaSiaFf
areaSiaGf
areaSiaGgf
areaSiaGsf
areaSiaHnf
areaSiaKf
areaSiaKfn
areaSiaKft
areaSiaNf
areaSiaNgf
areaSiaNnf
areaSiaUf
areaSiaUuf
areaSiaVf
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
        private ?int $numberOfBathrooms = null,
        private ?float $numberOfRooms = null,
    ) {
        if ($this->numberOfBathrooms !== null && $this->numberOfBathrooms < 0) {
            throw new \Exception("NumberOfBathrooms must be greater or equal to 0");
        }
        if ($this->numberOfRooms !== null && $this->numberOfRooms < 0) {
            throw new \Exception("NumberOfRooms must be greater or equal to 0");
        }
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
            'numberOfBathrooms' => $this->numberOfBathrooms,
            'numberOfRooms' => $this->numberOfRooms,
        ];
    }
}
