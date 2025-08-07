<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Model;



/**
 * @see https://qualipool.github.io/swissrets-json/#properties
 */
interface SwissRetsDtoInterface
{
    public function getData(): array;
}
