<?php
/**
 * Copyright ANdreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace StellaMaris\Clock;

use DateTimeImmutable;

interface ClockInterface
{
    /**
     * REturn the current point in time as a DateTimeImmutable object
     */
    public function now(): DateTimeImmutable;
}