<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Utility;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_seller_contactPerson
 */
final readonly class SwissRetsPersonDto implements SwissRetsDtoInterface
{
    public function __construct(
        private ?string $gender = null,
        private ?string $function = null,
        private ?string $givenName = null,
        private ?string $familyName = null,
        private ?string $email = null,
        private ?string $phone = null,
        private ?string $mobile = null,
        private ?string $note = null,
    ) {
        if ($email !== null && !preg_match('/^[^@]+@[^\.]+\..+$/', $email)) {
            throw new \Exception("Invalid Email: ".$email);
        }

        if ($phone !== null && !preg_match('/^[+]{0,1}[0-9][0-9 ]{2,}$/', $this->phone)) {
            throw new \Exception("Invalid Mobile: ".$this->$this->phone);
        }

        if ($mobile !== null && !preg_match('/^[+]{0,1}[0-9][0-9 ]{2,}$/', $this->mobile)) {
            throw new \Exception("Invalid Mobile: ".$this->$this->mobile);
        }
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getFunction(): ?string
    {
        return $this->function;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function getData(): array
    {
        return array(
            'gender' => $this->gender,
            'function' => $this->function,
            'givenName' => $this->givenName,
            'familyName' => $this->familyName,
            'email' => $this->email,
            'phone' => $this->phone,
            'mobile' => $this->mobile,
            'note' => $this->note,
        );
    }
}
