<?php

declare(strict_types=1);

namespace SBUERK\TF8TestExtension\Tests\Unit;

use SBUERK\TF8TestExtension\SimpleService;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class SimpleServiceTest extends UnitTestCase
{
    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text()', (new SimpleService())->text());
    }
}
