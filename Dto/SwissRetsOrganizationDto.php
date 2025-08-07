<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller_organization
 */
final readonly class SwissRetsOrganizationDto implements SwissRetsDtoInterface
{
    public function __construct(
        private ?string          $id = null,
        private ?SwissRetsAddressDto          $address = null,
        private ?string          $legalName = null,
        private ?string          $brand = null,
        private ?string          $email = null,
        private ?string          $emailRem = null,
        private ?string          $phone = null,
        private ?string          $mobile = null,
        private ?SwissRetsWebsiteDto          $website = null,
    ) {
        if ($email !== null && !preg_match('/^[^@]+@[^\.]+\..+$/', $email)) {
            throw new \Exception("Invalid Email: ".$email);
        }

        if ($this->emailRem) {
            trigger_error("emailRem is deprecated and will be removed in the future! see: https://qualipool.github.io/swissrets-json/#projects_items_seller_organization_emailRem", E_USER_WARNING);
        }

        if ($phone !== null && !preg_match('/^[+]{0,1}[0-9][0-9 ]{2,}$/', $this->phone)) {
            throw new \Exception("Invalid Mobile: ".$this->$this->phone);
        }

        if ($mobile !== null && !preg_match('/^[+]{0,1}[0-9][0-9 ]{2,}$/', $this->mobile)) {
            throw new \Exception("Invalid Mobile: ".$this->$this->mobile);
        }
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAddress(): ?SwissRetsAddressDto
    {
        return $this->address;
    }

    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getEmailRem(): ?string
    {
        return $this->emailRem;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function getWebsite(): ?SwissRetsWebsiteDto
    {
        return $this->website;
    }

    public function getData(): array
    {
        return array(
            'id' => $this->id,
            'address' => $this->address?->getData(),
            'legalName' => $this->legalName,
            'brand' => $this->brand,
            'email' => $this->email,
            'emailRem' => $this->emailRem,
            'phone' => $this->phone,
            'mobile' => $this->mobile,
            'website' => $this->website?->getData(),
        );
    }
}
