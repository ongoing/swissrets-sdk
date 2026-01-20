<?php
declare(strict_types=1);

namespace Ongoing\Swissrets\Dto;



use Ongoing\Swissrets\Dto\Property\SwissRetsPropertyDto;
use Ongoing\Swissrets\Model\SwissRetsDtoInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;


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

    public function generateJson(): string
    {
        $cleanData = $this->recursiveUnsetNull($this->getData());

        return json_encode($cleanData);
    }

    private function recursiveUnsetNull(array $array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->recursiveUnsetNull($value);
            }
            if ($value === null) {
                unset($array[$key]);
            }
        }

        return $array;
    }

    public function generateXml(): string
    {
        $loader = new FilesystemLoader(__DIR__.'/../templates');
        $twigEnvironment = new Environment($loader);

        $twigEnvironment->addFilter(new TwigFilter(
            'swissRetsDate',
            function(\DateTimeInterface $dateTime): string {
                return $dateTime->format(DATE_ATOM);
            })
        );

        return $twigEnvironment->render('export.xml.twig', [
            'exportDto' => $this,
        ]);
    }
}
