<?php

/**
 * Class Triboo_Blog_Model_Post
 */
class Triboo_Blog_Model_Post extends Mage_Core_Model_Abstract
{
    /**
     * Triboo_Blog_Model_Post construct
     * that initialize resource model post
     */
    public function _construct()
    {
        $this->_init('tbblog/post');
    }
}