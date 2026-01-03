<?php

namespace Ongoing\Swissrets\Validator;

use Opis\JsonSchema\Validator;
use Opis\JsonSchema\Errors\ErrorFormatter;

class SwissRetsValidator
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->setMaxErrors(20);
    }

    /**
     * Validates the given data against the SwissRETS schema.
     *
     * @param mixed $data The data to validate (can be an object, array, or JSON string)
     * @return array An array of errors formatted by Opis ErrorFormatter, empty if valid.
     */
    public function validate(mixed $data): array
    {
        if (is_string($data)) {
            $decoded = json_decode($data);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return ['root' => ['Invalid JSON string provided: ' . json_last_error_msg()]];
            }
            $data = $decoded;
        }

        // Ensure we have an object structure as expected by opis/json-schema
        // If it's an associative array, json_encode/decode trick converts it to stdClass
        if (is_array($data)) {
             $data = json_decode(json_encode($data));
        }

        $schemaPath = __DIR__ . '/../../resources/schema/swissRetsSchema.json';
        
        if (!file_exists($schemaPath)) {
            return ['root' => ['Schema file not found at ' . $schemaPath]];
        }

        $schemaContent = file_get_contents($schemaPath);
        $schema = json_decode($schemaContent);

        if (json_last_error() !== JSON_ERROR_NONE) {
             return ['root' => ['Invalid Schema JSON: ' . json_last_error_msg()]];
        }

        $result = $this->validator->validate($data, $schema);

        if ($result->isValid()) {
            return [];
        }

        $formatter = new ErrorFormatter();
        return $formatter->format($result->error());
    }
}
