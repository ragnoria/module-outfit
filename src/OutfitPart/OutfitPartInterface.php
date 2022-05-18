<?php

namespace Ragnoria\Outfit\OutfitPart;

use UnitEnum;

/**
 * This interface must be implemented by enums.
 *
 * @property-read string $name
 * @template-implements UnitEnum
 */
interface OutfitPartInterface
{
    public static function getRenderSequence(OutfitPartInterface $part = null): array|int;
}
