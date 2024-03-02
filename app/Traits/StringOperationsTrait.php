<?php
namespace App\Traits;

trait StringOperationsTrait
{

    public function removeContentBeforeFirstSlash($string): string {

        $parts = explode('/', $string, 2);

        if (count($parts) > 1) {
            // Get the content after the first slash
            $contentAfterFirstSlash = $parts[1];

        } else {
            // No slash found, handle accordingly
            return $string;
        }
        return $contentAfterFirstSlash;
    }
}
