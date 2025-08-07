<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Utility;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_seller_organization_website
 */
final readonly class SwissRetsWebsiteDto implements SwissRetsDtoInterface
{
    public function __construct(
        private string  $url,
        private ?string $title = null,
        private ?string $label = null,
    ) { }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getData(): array
    {
        return array(
            'url' => $this->url,
            'title' => $this->title,
            'label' => $this->label,
        );
    }
}
