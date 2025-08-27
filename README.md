# Ongoing SwissRETS SDK

Ongoing SwissRETS SDK is a supporting library for easier creation of [SwissRETS files](https://swissrets.ch/) (JSON and XML).

## Installation

```
composer require "ongoing/swissrets-sdk"
```


## Usage

```php
use Ongoing\Swissrets\Dto\SwissRetsExportDto;

$exportDto = new SwissRetsExportDto(
    generatorName   : 'Test Export',
    generatorVersion: '1.0'
);

/*
 * Create and add propertyDtos to $exportDto
 */

// generate JSON
$json = $exportDto->generateJson();

// generate XML
$xml = $exportDto->generateXml();
```

Consider looking at the `Ongoing\Swissrets\Dto\ExampleBuilder` for reference.


