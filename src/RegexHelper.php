<?php

declare(strict_types=1);

namespace Doomy\StringTools;

use function is_array;
use function preg_match;
use function preg_match_all;

use const PREG_PATTERN_ORDER;

class RegexHelper
{
    public function getMatch(string $rawData, string $pattern, int $nthMatch = 1): ?string
    {
        preg_match($pattern, $rawData, $matches);

        if (!isset($matches[$nthMatch]))
        {
            return null;
        }

        return $matches[$nthMatch];
    }

    public function getMatches(string $rawData, string $pattern, int $nthMatch = 1): array
    {
        preg_match_all($pattern, $rawData, $matches, PREG_PATTERN_ORDER);

        return is_array($matches[$nthMatch]) ? $matches[$nthMatch] : [];
    }

}