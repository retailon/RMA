<?php
/**
 * Created by PhpStorm.
 * User: Dhirendra
 * Date: 6/1/15
 * Time: 5:52 PM
 */ 
class Retailon_Stock_Model_CatalogInventory_Source_Stock extends Mage_CatalogInventory_Model_Source_Stock {

    public function toOptionArray()
    {
        return array(
            array(
                'value' => Mage_CatalogInventory_Model_Stock::STOCK_IN_STOCK,
                'label' => Mage::helper('cataloginventory')->__('In Stock')
            ),
            array(
                'value' => Mage_CatalogInventory_Model_Stock::STOCK_OUT_OF_STOCK,
                'label' => Mage::helper('cataloginventory')->__('Limited Stock')
            ),

            array(
                'value' => Mage_CatalogInventory_Model_Stock::STOCK_OUT_OF_STOCK,
                'label' => Mage::helper('cataloginventory')->__('Pre-order')
            ),

            array(
                'value' => Mage_CatalogInventory_Model_Stock::STOCK_OUT_OF_STOCK,
                'label' => Mage::helper('cataloginventory')->__('Backorder')
            ),
        );
    }
}