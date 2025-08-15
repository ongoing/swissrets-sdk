# Ongoing SwissRETS SDK

Ongoing SwissRETS SDK is a supporting library for easier creation of [SwissRETS files](https://swissrets.ch/) (JSON and XML).

## Installation

```
composer require "ongoing/swissrets-sdk"
```


## Usage for Symfony projects

```php
use Ongoing\Swissrets\Dto\SwissRetsExportDto;use Twig\Environment;


final readonly class SwissRetsBuilder
{
    public function __construct(
        private readonly Environment         $environment,
    ) { }

    public function buildBodyByPropertyList(iterable $properties, PlatformType $platformType): SwissRetsExportDto
    {
        $requestDto = new SwissRetsExportDto(
            generatorName   : 'Test Export',
            generatorVersion: '1.0'
        );
        
        // generate JSON
        $json = $requestDto->generateJson();
        
        // generate XML
        $json = $requestDto->generateXml();
    }
}
```


## Usage for projects without Symfony

```php
use Ongoing\Swissrets\Dto\SwissRetsExportDto;

$requestDto = new SwissRetsExportDto(
    generatorName   : 'Test Export',
    generatorVersion: '1.0'
);

// generate JSON
$json = $requestDto->getJson();

// generate XML
$xml = $generateXml->getJson();
```

