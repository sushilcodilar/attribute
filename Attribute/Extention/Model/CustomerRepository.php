<?php
namespace Attribute\Extention\Model;

use Attribute\Extention\Api\CustomerRepositoryInterface;
use Attribute\Extention\Model\CustomerFactory as Customer;
use Attribute\Extention\Model\ResourceModel\Customer as ResourceModel;

class CustomerRepository implements CustomerRepositoryInterface
{

    /**
     * @var ResourceModel
     */
    private ResourceModel $ResourceModel;
    /**
     * @var Customer
     */
    private Customer $CustomerFactory;

    /**
     * SachinEntityRepository constructor.
     *
     * @param ResourceModel $ResourceModel
     * @param Customer $CustomerFactory
     */
    public function __construct(
        ResourceModel $ResourceModel,
        Customer $CustomerFactory
    ) {
        $this->ResourceModel = $ResourceModel;
        $this->CustomerFactory = $CustomerFactory;
    }

    /**
     * Get customer by Customer ID.
     *
     * @param int $customerId
     */
    public function getById($customerId)
    {
        $entity = $this->CustomerFactory->create();
        $this->ResourceModel->load($entity, $customerId);
        return $entity;
    }

    /**
     * Delete customer by Customer ID.
     *
     */
    public function deleteById($customerId)
    {
        $entity = $this->CustomerFactory->create();
        $this->ResourceModel->load($entity, $customerId);
        return $this->ResourceModel->delete($entity);
    }
}
