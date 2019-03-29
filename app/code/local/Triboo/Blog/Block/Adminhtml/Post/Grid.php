<?php

declare(strict_types=1);

/**
 * Class Triboo_Blog_Block_Adminhtml_Post_Grid
 */
class Triboo_Blog_Block_Adminhtml_Post_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('tbblog_post_grid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    /**
     *@return array
     */
    public function _prepareCollection(): array
    {
        $collection = Mage::getModel(Triboo_Blog_Helper_Config::ENTITY_TABLE_POST)->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * @return array
     */
    public function _prepareColumns(): array
    {
       $this->addColumn(
           'entity_id', [
               'header' => 'Entity ID',
               'index' => 'entity_id',
               'type' => 'number'
       ]);
        $this->addColumn(
            'is_active', [
            'header' => 'Is Active',
            'index' => 'is_active',
            'type' => 'number'
        ]);
        $this->addColumn(
            'created_at', [
            'header' => 'Created At',
            'index' => 'created_at',
            'type' => 'date'
        ]);
        $this->addColumn(
            'updated_at', [
            'header' => 'Updated At',
            'index' => 'updated_at',
            'type' => 'date'
        ]);

        return parent::_prepareColumns();
    }
}