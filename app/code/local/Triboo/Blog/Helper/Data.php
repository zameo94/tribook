<?php
/**
 * Class Triboo_Blog_Helper_Data
 */
class Triboo_Blog_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * log file
     */
    const LOG_FILE = 'tribooBlog.log';
    /**
     * @var bool
     */
    protected $isLogEnable;

    /**
     * Triboo_Blog_Helper_Data constructor.
     */
    public function __construct()
    {
        $this->isLogEnable = Mage::getStoreConfig(Triboo_Blog_Helper_Config::LOG_ENABLE_CONFIG) ?: false;
    }
    /**
     * @var $message
     * @return string
     */
    public function log($message) : string
    {
        if ($this->isLogEnable)
        {
            Mage::log($message, null, self::LOG_FILE);
        }
        return $message;
    }
}
