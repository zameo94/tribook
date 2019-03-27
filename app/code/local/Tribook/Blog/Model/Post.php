<?php

/**
 * Class Tribook_Blog_Model_Post
 */
class Tribook_Blog_Model_Post extends Mage_Core_Model_Abstract
{
    /**
     * Tribook_Blog_Model_Post construct
     * that initialize resource model post
     */
    public function _construct()
    {
        $this->_init('tribook_blog/post');
    }
}