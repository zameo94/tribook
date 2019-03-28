<?php

$installer = $this;
$installer->startSetup();
/**
 * Create all entity tables
 */
$installer->createEntityTables(
    $this->getTable(Triboo_Blog_Helper_Config::ENTITY_TABLE_POST)
);
/**
 * Add Entity type
 */
$installer->addEntityType(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST, [
    'entity_model'          => Triboo_Blog_Helper_Config::ENTITY_MODEL_POST,
    'attribute_model'       => '',
    'table'                 => Triboo_Blog_Helper_Config::ENTITY_TABLE_POST,
    'increment_model'       => '',
    'increment_per_store'   => '0'
    ]
);
/**
 * install Entities with method getDefaultEntities that is in Triboo_Blog_Model_Resource_Setup
 */
$installer->installEntities();
$installer->endSetup();