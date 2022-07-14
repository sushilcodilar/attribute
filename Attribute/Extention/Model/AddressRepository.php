<?php
namespace Attribute\Extention\Model;

use Attribute\Extention\Model\AddressFactory as Address;
use Attribute\Extention\Model\ResourceModel\Address as ResourceModel;
use Attribute\Extention\Api\AddressRepositoryInterface;

class AddressRepository implements AddressRepositoryInterface
{

    /**
     * @var ResourceModel
     */
    private ResourceModel $ResourceModel;
    /**
     * @var Address
     */
    private Address $AddressFactory;


    /**
     *
     * @param ResourceModel $ResourceModel
     * @param Address $AddressFactory
     */
    public function __construct(
        ResourceModel $ResourceModel,
        Address $AddressFactory
    ) {
        $this->ResourceModel = $ResourceModel;
        $this->AddressFactory = $AddressFactory;
    }

    /**
     * Retrieve customer address.
     *
     * @param int $addressId
     * @return AddressInterface
     */
    public function getById($addressId)
    {
        $entity = $this->AddressFactory->create();
        $this->ResourceModel->load($entity, $addressId);
        return $entity;
    }

    /**
     * Delete customer address by ID.
     *
     * @param int $addressId
     * @return bool true on success
     * @throws \Exception
     */
    public function deleteById($addressId): bool
    {
        $entity = $this->CustomerFactory->create();
        $this->ResourceModel->load($entity, $addressId);
        return $this->ResourceModel->delete($entity);
    }

}
