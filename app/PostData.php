<?php

declare(strict_types=1);

namespace App;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class PostData extends Data
{
    public function __construct(
        public string $title,
        public string $content,
        /** @var \DateTime[] */
        public string $array1,
        /** @var array<\DateTime> */
        public string $array2,
        /** @var array<string,\DateTime> */
        public readonly array $array3,
        /** @var array<int,\DateTime> */
        public readonly array $array4,
        /** @var array<int,\App\NestedData> */
        public readonly array $array5,
        /** @var array<string,\App\NestedData> */
        public readonly array $array6,
    )
    {
    }
}
