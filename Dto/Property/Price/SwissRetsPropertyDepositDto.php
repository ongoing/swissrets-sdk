<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Property\Price;



use Ongoing\Swissrets\Model\DepositType;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties_items_prices_deposit
 */
final readonly class SwissRetsPropertyDepositDto implements SwissRetsDtoInterface
{
    public function __construct(
        // required fields
        private int          $amount,

        // optional fields
        private ?DepositType $type = null,
    ) {
        if ($this->amount !== null && $this->amount < 0) {
            throw new \Exception("Amount must be greater or equal to 0");
        }
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getType(): ?DepositType
    {
        return $this->type;
    }

    public function getData(): array
    {
        return [
            'amount' => $this->amount,
            'type' => $this->type?->value,
        ];
    }
}
