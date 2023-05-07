<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace SBUERK\TF8TestExtension\Tests\Acceptance\Support;

use Codeception\Actor;
use SBUERK\TF8TestExtension\Tests\Acceptance\Support\_generated\ApplicationTesterActions;
use TYPO3\TestingFramework\Core\Acceptance\Step\FrameSteps;

/**
 * Default backend admin or editor actor in the backend
*/
final class ApplicationTester extends Actor
{
    use ApplicationTesterActions;
    use FrameSteps;
}
