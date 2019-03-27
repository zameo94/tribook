<?php

/**
 * Class Tribook_Blog_Model_Resource_Post_Collection
 */
class Tribook_Blog_Model_Resource_Post_Collection extends Mage_Eav_Model_Entity_Collection_Abstract
{
    /**
     * Tribook_Blog_Model_Resource_Post_Collection construct.
     * that initialize resource model post
     */
    protected function _construct()
    {
        $this->_init('tribook_blog/post');
    }
}