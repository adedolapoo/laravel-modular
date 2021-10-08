<?php

namespace Modules\Core\Traits;

use Modules\Core\Transformers\BaseTransformer;

trait ApiModelTrait {

    public static function getTransformer()
    {
        return is_null(static::$transformer) ? new BaseTransformer : new static::$transformer;
    }
}
