<?php

/**
 * Class Triboo_Blog_Helper_Config for constants' configuration
 */
class Triboo_Blog_Helper_Config
{
    /**
     * enable log
     */
    const LOG_ENABLE_CONFIG = 'tbblog/log/enable';
    /**
     * connection with db
     */
    const CONNECTION_READ = 'blog_read';
    const CONNECTION_WRITE = 'blog_write';
    /**
     * EAV's configuration
     */
    const ENTITY_TYPE_CODE_POST = 'tbblog_post';
    const ENTITY_MODEL_POST = 'tbblog/post';
    const ENTITY_TABLE_POST = 'tbblog/post_entity';
}