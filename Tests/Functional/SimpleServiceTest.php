<?php

declare(strict_types=1);

namespace SBUERK\TF8TestExtension\Tests\Functional;

use SBUERK\TF8TestExtension\SimpleService;
use TYPO3\CMS\Core\Cache\CacheManager;
use TYPO3\CMS\Core\Cache\Frontend\PhpFrontend;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SimpleServiceTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/tf8-test-extension',
    ];

    public static function methodTextReturnsExpectedValueDataProvider(): \Generator
    {
        for ($i=1; $i < 100; $i++) {
            yield "number $i" => [
                'value' => $i,
                'expectedString' => sprintf('simpleservice::text(%s)', $i),
            ];
        }
    }

    /**
     * @test
     * @dataProvider methodTextReturnsExpectedValueDataProvider
     */
    public function methodTextReturnsExpectedValue(int $value, string $expectedString): void
    {
        self::assertSame($expectedString, $this->get(SimpleService::class)->text($value));
    }

    /**
     * @test
     */
    public function checkCoreCache(): void
    {
        /** @var PhpFrontend $core */
        $core = $this->get(CacheManager::class)->getCache('core');
        $core->set('test', 'return \'test\';');
        self::assertSame('test', $core->require('test'));
    }

    /**
     * @test
     */
    public function recheckCoreCacheToBeFilledForSameTestCase(): void
    {
        /** @var PhpFrontend $core */
        $core = $this->get(CacheManager::class)->getCache('core');
        self::assertSame('test', $core->require('test'));
    }
}
