<?php

namespace Ragnoria\Outfit\Contracts;

use Ragnoria\Outfit\OutfitPart\OutfitPartInterface;

interface Wearable
{
    public function getOutfitPart(): OutfitPartInterface;
}
