<?php

namespace Ragnoria\Outfit;

use Ragnoria\Outfit\Contracts\Wearable;
use Ragnoria\Outfit\OutfitPart\OutfitPartInterface;

class Outfit
{
    protected OutfitModelInterface $model;

    /** @var array<int,Wearable> */
    protected array $parts = [];


    public function __construct(OutfitModelInterface $model)
    {
        $this->setModel($model);
    }

    public function getModel(): OutfitModelInterface
    {
        return $this->model;
    }

    public function setModel(OutfitModelInterface $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getPart(OutfitPartInterface $part): ?Wearable
    {
        return $this->parts[$part->name] ?? null;
    }

    public function setPart(Wearable $wearable): self
    {
        $this->parts[$wearable->getOutfitPart()->name] = $wearable;

        return $this;
    }

    public function unsetPart(OutfitPartInterface $part): self
    {
        unset($this->parts[$part->name]);

        return $this;
    }

}
