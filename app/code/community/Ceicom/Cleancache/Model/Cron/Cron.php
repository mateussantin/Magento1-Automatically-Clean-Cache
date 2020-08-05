<?php
    class Ceicom_Cleancache_Model_Cron_Cron {
        public function cronCeicomCleanCache() {
            // Flush all magento cache
            Mage::app()->cleanCache();

            // log test
            // Mage::log('Success', null, 'cleanCache.log', true);
        }
    }