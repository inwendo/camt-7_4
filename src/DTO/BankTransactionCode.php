<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class BankTransactionCode
{
    /**
     * @var ProprietaryBankTransactionCode|null
     */
    private $proprietary = null;

    /**
     * @var DomainBankTransactionCode|null
     */
    private $domain = null;

    public function getProprietary(): ?ProprietaryBankTransactionCode
    {
        return $this->proprietary;
    }

    public function setProprietary(ProprietaryBankTransactionCode $proprietary): void
    {
        $this->proprietary = $proprietary;
    }

    public function getDomain(): ?DomainBankTransactionCode
    {
        return $this->domain;
    }

    public function setDomain(DomainBankTransactionCode $domain): void
    {
        $this->domain = $domain;
    }
}
