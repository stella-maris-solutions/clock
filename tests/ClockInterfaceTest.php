<?php
/**
 * Copyright Andreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace StellaMaris\ClockTest;

use PHPUnit\Framework\TestCase;
use StellaMaris\Clock\ClockInterface;

class ClockInterfaceTest extends TestCase
{
	/**
	 * @testdox The interface can be autoloaded
	 * @covers ClockInterface::now;
	 */
	public function testInterfaceIsUsable() : void
	{
		self::assertInstanceof(ClockInterface::class, $this->getMockBuilder(ClockInterface::class)->getMock());
	}
}
