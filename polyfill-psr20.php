<?php
/**
 * Copyright Andreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */
namespace Psr\Clock;

if (class_exists('\Psr\Clock\ClockInterface')) {
    return;
}

use DateTimeImmutable;

interface ClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable Object
     */
    public function now() : DateTimeImmutable;
}