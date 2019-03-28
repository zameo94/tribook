<?php

/**
 * Class Triboo_Blog_Model_Resource_Post
 */
class Triboo_Blog_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract
{
    /**
     * Triboo_Blog_Model_Resource_Post constructor.
     * @var $resource
     */
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST);
        $this->setConnection(
            $resource->getConnection(Triboo_Blog_Helper_Config::CONNECTION_READ),
            $resource->getConnection(Triboo_Blog_Helper_Config::CONNECTION_WRITE)
        );
    }
    /**
     * Triboo_Blog_Model_Resource_Post getDefaultAttributes.
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