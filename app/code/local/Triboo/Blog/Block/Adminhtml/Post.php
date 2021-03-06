<?php

/**
 * Class Triboo_Blog_Block_Adminhtml_Post
 */
class Triboo_Blog_Block_Adminhtml_Post extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Triboo_Blog_Block_Adminhtml_Post constructor.
     * @var _controller
     * @var _blockGroup
     * @var _headerText
     * @var _addButtonLabel
     */
    public function __construct()
    {
        #where you can find the controller
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'tbblog';
        #header text label
        $this->_headerText = 'Manage the posts';
        #button label
        $this->_addButtonLabel = 'Add a post';
        parent::__construct();
    }
}