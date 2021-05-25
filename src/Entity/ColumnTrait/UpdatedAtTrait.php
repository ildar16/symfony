<?php

namespace App\Entity\ColumnTrait;

use Carbon\CarbonImmutable;

trait UpdatedAtTrait
{
    /**
     * @ORM\Column(type="integer", name="updated_at", nullable=false)
     */
    protected int $updatedAt;

    public function getUpdatedAt(): CarbonImmutable
    {
        return CarbonImmutable::createFromTimestamp($this->updatedAt);
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function markAsUpdated(): void
    {
        $now = new CarbonImmutable();
        $this->updatedAt = $now->getTimestamp();
    }
}
