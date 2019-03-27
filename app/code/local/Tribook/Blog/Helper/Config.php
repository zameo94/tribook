<?php

/**
 * Class Tribook_Blog_Helper_Config for constants' configuration
 */
class Tribook_Blog_Helper_Config
{
    /**
     * @const is used to get if log is enable
     */
    const LOG_ENABLE_CONFIG = 'tb_blog/log/enable';
    /**
     * @const to set connection with db
     */
    const CONNECTION_READ = 'blog_read';
    const CONNECTION_WRITE = 'blog_write';
    /**
     * @const to set EAV's configuration
     */
    const ENTITY_TYPE_CODE_POST = 'tribook_blog_post';
    const ENTITY_MODEL_POST = 'tribook_blog/post';
    const ENTITY_TABLE_POST = 'tribook_blog/post_entity';
}