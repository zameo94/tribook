<?php
/**
 * Class Tribook_Blog_Helper_Data
 */
class Tribook_Blog_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @const string
     */
    const LOG_FILE = 'tribookBlog.log';
    /**
     * @var bool
     */
    protected $isLogEnable;

    /**
     * Tribook_Blog_Helper_Data constructor.
     */
    public function __construct()
    {
        $this->isLogEnable = Mage::getStoreConfig(Tribook_Blog_Helper_Config::LOG_ENABLE_CONFIG) ?: false;
    }
    /**
     * @var $message
     * @return string
     */
    public function log($message)
    {
        if ($this->isLogEnable)
        {
            Mage::log($message, null, self::LOG_FILE);
        }
        return $message;
    }
}