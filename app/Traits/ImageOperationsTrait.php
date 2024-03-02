<?php
namespace App\Traits;
use App\Traits\StringOperationsTrait;

trait ImageOperationsTrait
{
    use StringOperationsTrait;

    public function store($imageToStore , $path) : string{
        return self::removeContentBeforeFirstSlash($imageToStore->store($path));
    }
    
}
