<?php

/**
 * Class Triboo_Blog_Block_Adminhtml_Grid
 */
class Triboo_Blog_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Triboo_Blog_Block_Adminhtml_Grid constructor.
     * @var _controller
     * @var _blockGroup
     * @var _headerText
     * @var _addButtonLabel
     */
    public function __construct()
    {
        #where you can find the controller
        $this->_controller = 'triboo_blog';
        $this->_blockGroup = 'blog';
        #header text label
        $this->_headerText = 'Manage the posts';
        #button label
        $this->_addButtonLabel = 'Add a post';
        parent::__construct();
    }
}