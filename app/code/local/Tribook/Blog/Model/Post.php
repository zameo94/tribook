<?php
class Tribook_Blog_Model_Post extends Mage_Core_Model_Abstract{

    public function _construct()
    {
        $this->_init('tribook_blog/post');//Resource model
    }
}
