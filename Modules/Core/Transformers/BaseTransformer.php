<?php

namespace Modules\Core\Transformers;

use Specialtactics\L5Api\Transformers\RestfulTransformer;

class BaseTransformer extends RestfulTransformer
{
    public function transform($object)
    {
        if (is_object($object) && $object instanceof \stdClass) {
            $transformed = $this->transformStdClass($object);
        } elseif (is_object($object)) {
            $transformed = $this->transformRestfulModel($object);
        } else {
            throw new \Exception('Unexpected object type encountered in transformer');
        }

        return $transformed;
    }

    public function transformRestfulModel($model)
    {
        $this->model = $model;

        // Begin the transformation!
        $transformed = $model->toArray();

        /**
         * Filter out attributes we don't want to expose to the API
         */
        $filterOutAttributes = $this->getFilteredOutAttributes();

        $transformed = array_filter($transformed, function ($key) use ($filterOutAttributes) {
            return ! in_array($key, $filterOutAttributes);
        }, ARRAY_FILTER_USE_KEY);

        /*
         * Format all dates as Iso8601 strings, this includes the created_at and updated_at columns
         */
        foreach ($model->getDates() as $dateColumn) {
            if (! empty($model->$dateColumn) && ! in_array($dateColumn, $filterOutAttributes)) {
                $transformed[$dateColumn] = $model->$dateColumn->toIso8601String();
            }
        }

        /*
         * Primary Key transformation - all PKs to be called "id"
         */
        unset($transformed[$model->getKeyName()]);

        $transformed = array_merge(
            ['id' => $model->getKey()],
            $transformed
        );

        /*
         * Transform the model keys' case
         */
        $transformed = $this->transformKeysCase($transformed);

        /**
         * Get the relations for this object and transform them
         */
        $transformed = $this->transformRelations($transformed);

        return $transformed;
    }
}
