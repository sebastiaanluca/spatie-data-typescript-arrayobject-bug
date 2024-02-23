<?php

declare(strict_types=1);

namespace App;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class NestedData extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
