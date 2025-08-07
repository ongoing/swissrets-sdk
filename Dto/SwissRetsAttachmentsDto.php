<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;



use Ongoing\Swissrets\Dto\Attachment\SwissRetsImageDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#projects_items_localizations_items_attachments
 *
 * TODO: implement missing fields
 * - logos
 * - documents
 * - plans
 * - landRegisterExtracts
 * - directLinks
 * - links
 * - virtualTourLinks
 * - youTubeLinks
 */
final class SwissRetsAttachmentsDto implements SwissRetsDtoInterface
{
    private array $images = array();
    private array $logos = array();
    private array $documents = array();
    private array $plans = array();
    private array $landRegisterExtracts = array();
    private array $directLinks = array();
    private array $links = array();
    private array $virtualTourLinks = array();
    private array $youTubeLinks = array();

    public function getImages(): array
    {
        return $this->images;
    }

    public function addImage(SwissRetsImageDto $image): self
    {
        $this->images[] = $image;
        return $this;
    }

    public function getLogos(): array
    {
        return $this->logos;
    }

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function getPlans(): array
    {
        return $this->plans;
    }

    public function getLandRegisterExtracts(): array
    {
        return $this->landRegisterExtracts;
    }

    public function getDirectLinks(): array
    {
        return $this->directLinks;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function getVirtualTourLinks(): array
    {
        return $this->virtualTourLinks;
    }

    public function getYouTubeLinks(): array
    {
        return $this->youTubeLinks;
    }

    private function getImagesData(): array
    {
        return array_map(function(SwissRetsImageDto $imageDto) {
            return $imageDto->getData();
        }, $this->images);
    }

    public function getData(): array
    {
        return array(
            'images' => $this->getImagesData(),
//            'documents' => $this->documents,
//            'plans' => $this->plans,
//            'landRegisterExtracts' => $this->landRegisterExtracts,
//            'directLinks' => $this->directLinks,
//            'links' => $this->links,
//            'virtualTourLinks' => $this->virtualTourLinks,
//            'youTubeLinks' => $this->youTubeLinks,
        );
    }
}
