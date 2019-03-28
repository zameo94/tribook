<?php

/**
 * Class Triboo_Blog_Model_Resource_Setup
 */
class Triboo_Blog_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup
{
    /**
     * Method Triboo_Blog_Model_Resource_Setup getDefaultEntities.
     * @var $entities
     * @return array
     */
    public function getDefaultEntities() : array
    {
        $entities = [
            Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST => [
                'entity_model'     => Triboo_Blog_Helper_Config::ENTITY_MODEL_POST,
                'attribute_model'  => '',
                'table'            => Triboo_Blog_Helper_Config::ENTITY_TABLE_POST,
                'attributes'       => [
                    'title' => [
                        'type'              => 'varchar',
                        'backend'           => '',
                        'frontend'          => '',
                        'label'             => 'Title',
                        'input'             => 'text',
                        'class'             => '',
                        'source'            => '',
                        'global'            => 0,
                        'visible'           => true,
                        'required'          => true,
                        'user_defined'      => true,
                        'default'           => '',
                        'searchable'        => false,
                        'filterable'        => false,
                        'comparable'        => false,
                        'visible_on_front'  => true,
                        'unique'            => false,
                    ],
                    'author' => [
                        'type'              => 'varchar',
                        'label'             => 'Author',
                        'input'             => 'text',
                        'class'             => '',
                        'source'            => '',
                        'global'            => 0,
                        'visible'           => true,
                        'required'          => true,
                        'user_defined'      => true,
                        'default'           => '',
                        'searchable'        => false,
                        'filterable'        => false,
                        'comparable'        => false,
                        'visible_on_front'  => true,
                        'unique'            => false,
                    ]
                ]
            ]
        ];

        return $entities;
    }
}