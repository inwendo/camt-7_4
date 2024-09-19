<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

abstract class Identification
{
    /**
     * @var string|null
     */
    protected $identification = null;

    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    public function setIdentification(string $identification): void
    {
        $this->identification = $identification;
    }
}
