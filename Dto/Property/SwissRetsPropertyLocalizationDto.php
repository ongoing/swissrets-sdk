<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Dto\Project\SwissRetsProjectLocalizationDto;
use Ongoing\Swissrets\Dto\SwissRetsAttachmentsDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_localizations_items
 */
final readonly class SwissRetsPropertyLocalizationDto extends SwissRetsProjectLocalizationDto implements SwissRetsDtoInterface
{
        // TODO: implement events
//    private array $events = array();

    public function __construct(
        // required fields
        string  $languageCode,
        string  $title,

        // optional fields
        ?string $excerpt = null,
        ?string $description = null,
        ?SwissRetsAttachmentsDto $attachmentsDto = null,
        private ?string $location = null,
        private ?string $equipment = null,
        private ?string $visitInformation = null,
    ) {
        parent::__construct(
            $languageCode,
            $title,
            $excerpt,
            $description,
            $attachmentsDto,
        );
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    public function getVisitInformation(): ?string
    {
        return $this->visitInformation;
    }

    public function getData(): array
    {
        $data = parent::getData();

        $data['location'] = $this->location;
        $data['equipment'] = $this->equipment;
        $data['visitInformation'] = $this->visitInformation;
        // TODO: implement events
//        $data['events'] = $this->events;

        return $data;
    }
}
