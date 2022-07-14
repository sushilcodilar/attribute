<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Attribute\Extention\Api;

use Attribute\Extention\Api\Data\AddressInterface;

/**
 * Customer address CRUD interface.
 * @api
 * @since 100.0.2
 */
interface AddressRepositoryInterface
{
    /**
     * Retrieve customer address.
     *
     * @param int $addressId
     * @return AddressInterface
     */
    public function getById($addressId);
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId
     * @return bool true on success
     */
    public function deleteById($addressId);

    /**
     * Get entity by id
     *
     * @param string $entityId
     * @return AddressInterface
     */

}
