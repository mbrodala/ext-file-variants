<?php
declare(strict_types=1);

namespace T3G\AgencyPack\FileVariants\Tests\Unit\DataHandler;

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

use T3G\AgencyPack\FileVariants\DataHandler\DataHandlerHook;
use PHPUnit\Framework\TestCase;

class DataHandlerHookTest extends TestCase
{

    /**
     * @test
     */
    public function constructThrowsExceptionIfNoConfigurationCanBeFound()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(1490476773);
        new DataHandlerHook();
    }

}