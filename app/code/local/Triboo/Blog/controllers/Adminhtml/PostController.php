<?php

declare(strict_types=1);

/**
 * Class Triboo_Blog_Adminhtml_PostController
 */
class Triboo_Blog_Adminhtml_PostController extends Mage_Adminhtml_Controller_Action
{

    /**
     *
     */
    public function indexAction()
    {
        /*
         * For adminhtml menù
         * load the layout
         */
        $this->loadLayout();
        /*
         * output layout
         */
        $this->renderLayout();
    }

    /**
     *
     */
    public function gridAction()
    {
        $this->loadLayout()
            ->getresponse()->setBody(
                $this->getLayout()->createBlock('blog/adminhtml_post_grid')->toHtml()
            );
    }
}