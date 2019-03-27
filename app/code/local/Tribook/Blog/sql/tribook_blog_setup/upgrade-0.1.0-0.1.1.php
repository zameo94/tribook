<?php
$installer = $this;
$installer->startSetup();
/**
 * Adding new attribute "enable"
 */
$installer->addAttribute(Tribook_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'enable', [
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
 * Adding new attribute "description"
 */
$installer->addAttribute(Tribook_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'description', [
        'type'              => 'varchar',
        'label'             => 'description',
        'input'             => 'text',
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
$installer -> endSetup();