<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\Bundle\AdminTranslatableBundle\Doctrine\Admin;

use FSi\Bundle\AdminBundle\Doctrine\Admin\ListElement;

abstract class TranslatableListElement extends ListElement implements TranslatableAwareElement
{
    use TranslatableAwareElementImpl;

    /**
     * {@inheritdoc}
     */
    public function getRoute(): string
    {
        return 'fsi_admin_translatable_list';
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteParameters(): array
    {
        return $this->appendLocaleParameter(parent::getRouteParameters());
    }
}
