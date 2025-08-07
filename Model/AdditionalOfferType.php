<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;


enum AdditionalOfferType: string
{
    case PARKING_EXTERIOR_SPACE = "parking-exterior-space";
    case PARKING_CARPORT = "parking-carport";
    case PARKING_GARAGE = "parking-garage";
    case PARKING_GARAGE_CONNECTED = "parking-garage-connected";
    case PARKING_GARAGE_BOX = "parking-garage-box";
    case PARKING_GARAGE_UNDERGROUND = "parking-garage-underground";
    case PARKING_HOUSE = "parking-house";
    case PARKING_DUPLEX = "parking-duplex";
    case PARKING_DOUBLE_GARAGE = "parking-double-garage";
    case ROOM_WORKROOM = "room-workroom";
    case ROOM_STORAGE_BASEMENT = "room-storage-basement";
}
