<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Project;



use Ongoing\Swissrets\Dto\SwissRetsOrganizationDto;
use Ongoing\Swissrets\Dto\SwissRetsPersonDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller
 */
readonly class SwissRetsProjectSellerDto implements SwissRetsDtoInterface
{
    /**
     * @param string|null             $inquiryEmail  - is used for JSON
     * @param SwissRetsPersonDto|null $inquiryPerson - is used for XML
     */
    public function __construct(
        protected ?string                   $inquiryEmail = null,
        protected ?SwissRetsPersonDto       $inquiryPerson = null,
        protected ?SwissRetsOrganizationDto $organization = null,
        protected ?SwissRetsPersonDto       $contactPerson = null,
    ) {
        if ($inquiryEmail !== null && !preg_match('/^[^@]+@[^\.]+\..+$/', $inquiryEmail)) {
            throw new \Exception("Invalid Email: ".$inquiryEmail);
        }
    }

    public function getInquiryEmail(): ?string
    {
        return $this->inquiryEmail;
    }

    public function getInquiryPerson(): ?SwissRetsPersonDto
    {
        return $this->inquiryPerson;
    }

    public function getOrganization(): ?SwissRetsOrganizationDto
    {
        return $this->organization;
    }

    public function getContactPerson(): ?SwissRetsPersonDto
    {
        return $this->contactPerson;
    }

    public function getData(): array
    {
        return array(
            'inquiryEmail' => $this->inquiryEmail,
            'organization' => $this->organization?->getData(),
            'contactPerson' => $this->contactPerson?->getData(),
        );
    }
}
