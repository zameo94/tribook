<?php
class Tribook_Blog_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract{

    public function __construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('tribook_blog_post'); //entity type resource che andrà ad usare.
        $this->setConnection(
            $resource->getConnection('blog_read'), //connections read/write
            $resource->getConnection('blog_write')
        );
    }
    protected function __getDefaultAttributes(){
        return array(
            'entity_type_id',
            'attribute_set_id',
            'created_at',
            'updated_at',
            'increment_id',
            'store_id',
        );
    }
}