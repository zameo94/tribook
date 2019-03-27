<?php

/**
 * Class Tribook_Blog_Model_Resource_Post
 */
class Tribook_Blog_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract
{
    /**
     * Tribook_Blog_Model_Resource_Post constructor.
     * @var $resource
     */
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType(Tribook_Blog_Helper_Config::ENTITY_TYPE_CODE_POST);
        $this->setConnection(
            $resource->getConnection(Tribook_Blog_Helper_Config::CONNECTION_READ),
            $resource->getConnection(Tribook_Blog_Helper_Config::CONNECTION_WRITE)
        );
    }
    /**
     * Tribook_Blog_Model_Resource_Post getDefaultAttributes.
     * @return array
     */
    protected function __getDefaultAttributes()
    {
        return [
            'entity_type_id',
            'attribute_set_id',
            'created_at',
            'updated_at',
            'increment_id',
            'store_id',
            ];
    }
}