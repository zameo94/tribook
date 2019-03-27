<?php
$installer = $this;
$installer->startSetup();
/*
 * Create all entity tables
 */
$installer->createEntityTables(
    $this->getTable('tribook_blog/post_entity')
);

/*
 * Add Entity type
 */
$installer->addEntityType('tribook_blog_post', Array(
    'entity_model'          => 'tribook_blog/post',
    'attribute_model'       =>'',
    'table'                 =>'tribook_blog/post_entity',
    'increment_model'       =>'',
    'increment_per_store'   =>'0'
));

$installer->installEntities();

$installer->endSetup();