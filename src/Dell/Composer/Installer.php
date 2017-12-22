<?php
/**
 * Copyright © 2017 GBKSOFT. Web and Mobile Software Development.
 * See LICENSE.txt for license details.
 */
namespace Dell\Composer;

use Composer\Installer\LibraryInstaller;

/**
 * Class Installer
 */
class Installer extends LibraryInstaller
{
    /**
     * Composer package type
     */
    const TYPE = 'private-package';

    /**
     * @inheritdoc
     */
    public function supports($packageType)
    {
        return $packageType === self::TYPE;
    }
}
