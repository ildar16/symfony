<?php

namespace App\Entity\ColumnTrait;

use Carbon\CarbonImmutable;

trait CreatedAtTrait
{
    /**
     * @ORM\Column(type="integer", name="created_at", nullable=false)
     */
    protected int $createdAt = 0;

    public function getCreatedAt(): CarbonImmutable
    {
        return CarbonImmutable::createFromTimestamp($this->createdAt);
    }

    /**
     * @ORM\PrePersist
     */
    public function onCreate(): void
    {
        if ($this->createdAt === 0) {
            $now = new CarbonImmutable();
            $this->createdAt = $now->getTimestamp();
        }
    }
}

