<?php

declare(strict_types=1);

namespace SBUERK\TF8TestExtension\Tests\Functional;

use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class ComposerSupportTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'typo3conf/ext/tf8_extension/Tests/Functional/Fixtures/Extensions/composer_extension',
    ];

    #[Test]
    public function assertTrueIsTrue(): void
    {
        self::assertTrue(true);
    }
}
