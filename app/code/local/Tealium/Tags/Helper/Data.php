<?php
class Tealium_Tags_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isEnabled($store) {
        return Mage::getStoreConfig('tealium_tags/general/enable', $store);
    }

    function getTealiumBaseUrl($store){
        $account = $this->getAccount($store);
        $profile = $this->getProfile($store);
        $env = $this->getEnv($store);
        return "//tags.tiqcdn.com/utag/$account/$profile/$env/utag.js";
    }

    public function getAccount($store) {
        return Mage::getStoreConfig('tealium_tags/general/account', $store);
    }

    public function getProfile($store) {
        return Mage::getStoreConfig('tealium_tags/general/profile', $store);
    }
    public function getEnv($store) {
        return Mage::getStoreConfig('tealium_tags/general/env', $store);
    }

}
	 