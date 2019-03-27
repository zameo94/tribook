<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute('tribook_blog_post', 'enable', array(
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
    )
);
$installer->addAttribute('tribook_blog_post', 'description', array(
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
    )
);
$installer -> endSetup();