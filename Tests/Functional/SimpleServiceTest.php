<?php

declare(strict_types=1);

namespace SBUERK\TF8TestExtension\Tests\Functional;

use SBUERK\TF8TestExtension\SimpleService;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SimpleServiceTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/tf8-test-extension',
    ];

    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text()', $this->get(SimpleService::class)->text());
    }
}
