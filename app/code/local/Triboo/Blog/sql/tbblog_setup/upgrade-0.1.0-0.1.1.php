<?php
$installer = $this;
$installer->startSetup();
/**
 * Adding new attribute "created_at"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'created_at', [
        'type'              => 'datetime',
        'label'             => 'created_at',
        'input'             => 'date',
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
);
/**
 * Adding new attribute "updated_at"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'updated_at', [
        'type'              => 'datetime',
        'label'             => 'updated_at',
        'input'             => 'date',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
    ]
);
/**
 * Adding new attribute "enable"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'enable', [
        'type'              => 'int',
        'label'             => 'enable',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
        ]
);
/**
 * Adding new attribute "post_image"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'post_image', [
        'type'              => 'varchar',
        'label'             => 'post_image',
        'input'             => 'media_image',
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
);
/**
 * Adding new attribute "description"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'description', [
        'type'              => 'varchar',
        'label'             => 'description',
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
);
/**
 * Adding new attribute "short_description"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'short_description', [
        'type'              => 'varchar',
        'label'             => 'description',
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
);
$installer -> endSetup();