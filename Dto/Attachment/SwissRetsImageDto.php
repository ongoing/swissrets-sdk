<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Attachment;



use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_localizations_items_attachments
 */
final readonly class SwissRetsImageDto implements SwissRetsDtoInterface
{
    public function __construct(
        private string  $url,
        private ?string $title = null,
        private ?string $description = null,
        private ?string $mimeType = null,
    ) { }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getData(): array
    {
        return array(
            'url' => $this->url,
            'title' => $this->title,
            'description' => $this->description,
            'mimeType' => $this->mimeType,
        );
    }
}
