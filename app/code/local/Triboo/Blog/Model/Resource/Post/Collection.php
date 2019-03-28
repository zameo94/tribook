<?php

/**
 * Class Triboo_Blog_Model_Resource_Post_Collection
 */
class Triboo_Blog_Model_Resource_Post_Collection extends Mage_Eav_Model_Entity_Collection_Abstract
{
    /**
     * Triboo_Blog_Model_Resource_Post_Collection construct.
     * that initialize resource model post
     */
    protected function _construct()
    {
        $this->_init('tbblog/post');
    }
}