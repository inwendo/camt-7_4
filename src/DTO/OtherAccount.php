<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class OtherAccount extends Account
{
    /**
     * @var string
     */
    private $identification;

    /**
     * @var string|null
     */
    private $schemeName = null;

    /**
     * @var string|null
     */
    private $issuer = null;

    public function __construct(string $identification)
    {
        $this->identification = $identification;
    }

    /**
     * @inheritDoc
     */
    public function getIdentification(): string
    {
        return $this->identification;
    }

    public function setSchemeName(string $schemeName): void
    {
        $this->schemeName = $schemeName;
    }

    public function getSchemeName(): ?string
    {
        return $this->schemeName;
    }

    public function setIssuer(string $issuer): void
    {
        $this->issuer = $issuer;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
}
