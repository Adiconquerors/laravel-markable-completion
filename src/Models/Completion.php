<?php

namespace Maize\Markable\Models;

use Maize\Markable\Mark;

class Completion extends Mark
{
    public static function markableRelationName(): string
    {
        return 'completioners';
    }
}
