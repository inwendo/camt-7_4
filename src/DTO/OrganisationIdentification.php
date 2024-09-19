<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class OrganisationIdentification extends Identification
{
    /**
     * @var string|null
     */
    private $bic = null;

    /**
     * @var string|null
     */
    private $ibei = null;

    /**
     * @var string|null
     */
    private $bei = null;

    /**
     * @var string|null
     */
    private $eangln = null;

    /**
     * @var string|null
     */
    private $chipsUniversalId = null;

    /**
     * @var string|null
     */
    private $duns = null;

    /**
     * @var string|null
     */
    private $bankPartyId = null;

    /**
     * @var string|null
     */
    private $taxId = null;

    /**
     * @var string|null
     */
    private $issuer = null;

    /**
     * @var string|null
     */
    private $otherId = null;

    /**
     * @var string|null
     */
    private $otherIssuer = null;

    /**
     * @var string|null
     */
    private $otherSchemeName = null;

    /**
     * @var string|null
     */
    private $otherType = null;

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(string $bic): void
    {
        $this->bic = $bic;
        $this->identification = $bic;
    }

    public function getIbei(): ?string
    {
        return $this->ibei;
    }

    public function setIbei(string $ibei): void
    {
        $this->ibei = $ibei;
        $this->identification = $ibei;
    }

    public function getBei(): ?string
    {
        return $this->bei;
    }

    public function setBei(string $bei): void
    {
        $this->bei = $bei;
        $this->identification = $bei;
    }

    public function getEangln(): ?string
    {
        return $this->eangln;
    }

    public function setEangln(string $eangln): void
    {
        $this->eangln = $eangln;
        $this->identification = $eangln;
    }

    public function getChipsUniversalId(): ?string
    {
        return $this->chipsUniversalId;
    }

    public function setChipsUniversalId(string $chipsUniversalId): void
    {
        $this->chipsUniversalId = $chipsUniversalId;
        $this->identification = $chipsUniversalId;
    }

    public function getDuns(): ?string
    {
        return $this->duns;
    }

    public function setDuns(string $duns): void
    {
        $this->duns = $duns;
        $this->identification = $duns;
    }

    public function getBankPartyId(): ?string
    {
        return $this->bankPartyId;
    }

    public function setBankPartyId(string $bankPartyId): void
    {
        $this->bankPartyId = $bankPartyId;
        $this->identification = $bankPartyId;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
        $this->identification = $taxId;
    }

    public function getOtherId(): ?string
    {
        return $this->otherId;
    }

    public function setOtherId(string $otherId): void
    {
        $this->otherId = $otherId;
        $this->identification = $otherId;
    }

    public function getOtherIssuer(): ?string
    {
        return $this->otherIssuer;
    }

    public function setOtherIssuer(string $otherIssuer): void
    {
        $this->otherIssuer = $otherIssuer;
    }

    public function getOtherSchemeName(): ?string
    {
        return $this->otherSchemeName;
    }

    public function setOtherSchemeName(string $otherSchemeName): void
    {
        $this->otherSchemeName = $otherSchemeName;
    }

    public function getOtherType(): ?string
    {
        return $this->otherType;
    }

    public function setOtherType(string $otherType): void
    {
        $this->otherType = $otherType;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(string $issuer): void
    {
        $this->issuer = $issuer;
        $this->identification = $issuer;
    }
}
