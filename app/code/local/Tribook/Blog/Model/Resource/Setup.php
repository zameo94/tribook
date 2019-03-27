<?php
class Tribook_Blog_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup{
    public function getDefaultEntities(){
        $entities = array(
            'tribook_blog_post' => array(
                    'entity_model' => 'tribook_blog/post',
                    'attribute_model'=>'',
                    'table'=>'tribook_blog/post_entity',
                    'attributes' => array(
                            'title' => array(
                                'type'=>'varchar',
                                'backend'=>'',
                                'frontend'=>'',
                                'label' => 'Title',
                                'input' => 'text',
                                'class' => '',
                                'source' => '',
                                'global' => 0,
                                'visible' => true,
                                'required' => true,
                                'user_defined' => true,
                                'default' => '',
                                'searchable' => false,
                                'filterable' => false,
                                'comparable' => false,
                                'visible_on_front' => true,
                                'unique' => false,
                            ),
                            'author' => array(
                                'type'=>'varchar',
                                'label' => 'Author',
                                'input' => 'text',
                                'class' => '',
                                'source' => '',
                                'global' => 0,
                                'visible' => true,
                                'required' => true,
                                'user_defined' => true,
                                'default' => '',
                                'searchable' => false,
                                'filterable' => false,
                                'comparable' => false,
                                'visible_on_front' => true,
                                'unique' => false,
                            ),
                    ),
            )
        );
     return $entities;
    }
}