<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class CreditorReferenceInformation
{
    /**
     * @var string|null
     */
    private $ref = null;

    /**
     * @var string|null
     */
    private $code = null;

    /**
     * @var string|null
     */
    private $proprietary = null;

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): void
    {
        $this->ref = $ref;
    }

    public static function fromUnstructured(string $ref): self
    {
        $information = new self();
        $information->ref = $ref;

        return $information;
    }

    public function getProprietary(): ?string
    {
        return $this->proprietary;
    }

    public function setProprietary(?string $proprietary): void
    {
        $this->proprietary = $proprietary;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
}
