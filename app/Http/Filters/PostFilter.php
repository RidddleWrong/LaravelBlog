<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const SEARCH = 'search';
    public const CATEGORY_ID = 'category_id';

    public function getCallbacks(): array
    {
        /**
         * [constantInputFieldName => [$thisClass, 'methodInThisClass']]
         */
        return [
            self::SEARCH => [$this, 'search'],
            self::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function search(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%$value%")
            ->orWhere('content', 'like', "%$value%");
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', '=', $value);
    }
}
