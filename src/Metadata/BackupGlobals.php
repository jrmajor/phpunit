<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class BackupGlobals extends Metadata
{
    private ?bool $enabled;

    public function __construct(?bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function isBackupGlobals(): bool
    {
        return true;
    }

    public function enabled(): ?bool
    {
        return $this->enabled;
    }
}
