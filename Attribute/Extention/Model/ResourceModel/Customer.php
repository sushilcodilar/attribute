<?php
namespace Attribute\Extention\Model\ResourceModel;

class Customer extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('customers', 'entity_id');
    }
}
