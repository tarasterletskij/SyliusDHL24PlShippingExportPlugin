<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

namespace Tests\BitBag\Dhl24PlShippingExportPlugin\Behat\Page\Admin\ShippingGateway;

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;

/**
 * @author Patryk Drapik <patryk.drapik@bitbag.pl>
 */
interface CreatePageInterface extends BaseCreatePageInterface
{
    /**
     * @param string $name
     */
    public function selectShippingMethod($name);

    /**
     * @param string $field
     * @param string $option
     */
    public function selectFieldOption($field, $option);

    /**
     * @param string $field
     * @param string $value
     */
    public function fillField($field, $value);

    public function submit();
}