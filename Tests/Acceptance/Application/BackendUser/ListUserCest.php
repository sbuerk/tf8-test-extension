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

namespace SBUERK\TF8TestExtension\Tests\Acceptance\Application\BackendUser;

use SBUERK\TF8TestExtension\Tests\Acceptance\Support\ApplicationTester;

/**
 * List User tests
 */
final class ListUserCest
{
    public function _before(ApplicationTester $I): void
    {
        $I->useExistingSession('admin');

        $I->see('Backend Users');
        $I->click('Backend Users');

        $I->switchToContentFrame();
    }

    public function showsHeadingAndListsBackendUsers(ApplicationTester $I): void
    {
        $I->see('Backend users');

        $I->wantTo('See the table of users');
        $I->waitForElementVisible('#typo3-backend-user-list');

        // We expect exact four Backend Users created from the Fixtures
        $this->checkCountOfUsers($I, 2);
    }

    private function checkCountOfUsers(ApplicationTester $I, int $countOfUsers): void
    {
        $I->canSeeNumberOfElements('#typo3-backend-user-list tbody tr', $countOfUsers);
        $I->wantToTest('If a number of users is shown in the footer row');
        $I->canSeeNumberOfElements('#typo3-backend-user-list tfoot tr', 1);
        $I->see($countOfUsers . ' Users', '#typo3-backend-user-list tfoot tr');
    }
}
