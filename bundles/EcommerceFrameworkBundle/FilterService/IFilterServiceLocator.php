<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\FilterService;

@trigger_error(
    'Interface Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\IFilterServiceLocator is deprecated since version 6.0.0 and will be removed in Pimcore 10. ' .
    ' Use ' . FilterServiceLocatorInterface::class . ' class instead.',
    E_USER_DEPRECATED
);

class_exists(FilterServiceLocatorInterface::class);

if (false) {
    /**
     * @deprecated use FilterServiceLocatorInterface instead.
     */
    interface IFilterServiceLocator
    {
    }
}
