<?php
/**
 * Copyright ANdreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace StellaMaris\Clock;

use DateTimeImmutable;
use Psr\Clock\ClockInterface as PsrClockInterface;

interface ClockInterface extends PsrClockInterface
{
    /**
     * Return the current point in time as a DateTimeImmutable object
     */
    public function now(): DateTimeImmutable;
}