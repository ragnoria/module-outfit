<?php

namespace Ragnoria\Outfit\OutfitPart;

use Ragnoria\Outfit\Exceptions\OutfitException;

enum OutfitPart implements OutfitPartInterface
{
    case HEAD;
    case NECK;
    case BACK;
    case BODY;
    case LEGS;
    case FEET;
    case SHOULDERS;
    case LEFT_HAND;
    case RIGHT_HAND;


    private const RENDER_SEQUENCE = [
        self::HEAD,
        self::NECK,
        self::BACK,
        self::BODY,
        self::LEGS,
        self::FEET,
        self::SHOULDERS,
        self::LEFT_HAND,
        self::RIGHT_HAND,
    ];


    /**
     * Get OutfitPart's position in rendering sequence.
     * For a complete order list do not pass OutfitPart argument.
     *
     * @param OutfitPartInterface|null $part
     * @return array|int
     * @throws OutfitException
     */
    public static function getRenderSequence(OutfitPartInterface $part = null): array|int
    {
        if (!$part) {
            return self::RENDER_SEQUENCE;
        }

        if (!in_array($part, self::RENDER_SEQUENCE)) {
            throw new OutfitException('Given outfit part is not declared in render sequence.');
        }

        return array_search($part, self::RENDER_SEQUENCE);
    }

}
