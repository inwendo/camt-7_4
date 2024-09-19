<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

use Money\Money;

class Charges
{
    /**
     * @var Money|null
     */
    private $totalChargesAndTaxAmount = null;

    /**
     * @var ChargesRecord[]
     */
    private $records = [];

    public function getTotalChargesAndTaxAmount(): ?Money
    {
        return $this->totalChargesAndTaxAmount;
    }

    public function setTotalChargesAndTaxAmount(Money $money): void
    {
        $this->totalChargesAndTaxAmount = $money;
    }

    public function addRecord(ChargesRecord $record): void
    {
        $this->records[] = $record;
    }

    /**
     * @return ChargesRecord[]
     */
    public function getRecords(): array
    {
        return $this->records;
    }

    public function getRecord(): ?ChargesRecord
    {
        if (isset($this->records[0])) {
            return $this->records[0];
        }

        return null;
    }
}
