<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto\Project;



use Ongoing\Swissrets\Dto\SwissRetsAttachmentsDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_localizations_items
 */
readonly class SwissRetsProjectLocalizationDto implements SwissRetsDtoInterface
{
    public function __construct(
        protected string  $languageCode,
        protected string  $title,
        protected ?string $excerpt = null,
        protected ?string $description = null,
        protected ?SwissRetsAttachmentsDto $attachmentsDto = null,
    ) {
        if (!preg_match('/^[a-z]{2}$/', $this->languageCode)) {
            throw new \Exception("Invalid LanguageCode: ".$this->languageCode);
        }
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAttachments(): ?SwissRetsAttachmentsDto
    {
        return $this->attachmentsDto;
    }

    public function getData(): array
    {
        return array(
            'languageCode' => $this->languageCode,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'attachments' => $this->attachmentsDto?->getData(),
        );
    }
}
