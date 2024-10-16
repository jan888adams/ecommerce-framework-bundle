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
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter;

/**
 * Search filter with flexible column definition
 */
class Search extends AbstractSearch
{
    /**
     * Search column
     *
     */
    protected string $column;

    public function __construct(string $value, string $column)
    {
        parent::__construct($value);
        $this->column = $column;
    }

    protected function getConditionColumn(): string
    {
        return $this->column;
    }
}
