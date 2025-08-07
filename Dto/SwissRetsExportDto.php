<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;



use Ongoing\Swissrets\Dto\Property\SwissRetsPropertyDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;


/**
 * @see https://qualipool.github.io/swissrets-json/#properties
 *
 * TODO: implement ProjectDto
 */
final class SwissRetsExportDto implements SwissRetsDtoInterface
{
    private ?\DateTimeImmutable $created;
    private array $generator = array();
    private array $projects = array();
    private array $properties = array();

    public function __construct(
        string $generatorName,
        string $generatorVersion,
        ?\DateTimeImmutable $created = null
    ) {
        $this->generator['name'] = $generatorName;
        $this->generator['version'] = $generatorVersion;
        $this->created = $created;
    }

    public function getGeneratorName(): string
    {
        return $this->generator['name'];
    }

    public function getGeneratorVersion(): string
    {
        return $this->generator['version'];
    }

//    public function addProject(SwissRetsProjectDto $projectDto)
//    {
//        $this->projects[] = $projectDto;
//    }

    public function getProjects(): array
    {
        return $this->projects;
    }

    public function addProperty(SwissRetsPropertyDto $propertyDto)
    {
        $this->properties[] = $propertyDto;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    private function getProjectsData(): array
    {
        return array();
    }

    private function getPropertiesData(): array
    {
        return array_map(function(SwissRetsPropertyDto $propertyDto) {
            return $propertyDto->getData();
        }, $this->properties);
    }

    public function getData(): array
    {
        $data = array(
            'generator' => $this->generator,
            'projects' => $this->getProjectsData(),
            'properties' => $this->getPropertiesData(),
        );

        if ($this->created) {
            $data['created'] = $this->created->format(DATE_ATOM);
        }

        return $data;
    }

    public function getJson(): string
    {
        return json_encode($this->getData());
    }
}
