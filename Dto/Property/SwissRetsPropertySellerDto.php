<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property;



use Ongoing\Swissrets\Dto\Project\SwissRetsProjectSellerDto;
use Ongoing\Swissrets\Dto\Utility\SwissRetsOrganizationDto;
use Ongoing\Swissrets\Dto\Utility\SwissRetsPersonDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_seller
 */
final readonly class SwissRetsPropertySellerDto extends SwissRetsProjectSellerDto implements SwissRetsDtoInterface
{
    /**
     * @inheritDoc
     */
    public function __construct(
        ?string                     $inquiryEmail = null,
        ?SwissRetsPersonDto         $inquiryPerson = null,
        ?SwissRetsOrganizationDto   $organization = null,
        ?SwissRetsPersonDto         $contactPerson = null,
        private ?SwissRetsPersonDto $visitPerson = null,
    ) {
        parent::__construct(
            $inquiryEmail,
            $inquiryPerson,
            $organization,
            $contactPerson,
        );
    }

    public function getVisitPerson(): ?SwissRetsPersonDto
    {
        return $this->visitPerson;
    }

    public function getData(): array
    {
        $data = parent::getData();

        $data['visitPerson'] = $this->visitPerson?->getData();

        return $data;
    }
}
