<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('sales/bestsellers_aggregated_daily'), 'product_type_id',
    "TEXT NOT NULL DEFAULT '' AFTER `product_id`");

$installer->getConnection()->addColumn($installer->getTable('sales/bestsellers_aggregated_monthly'), 'product_type_id',
    "TEXT NOT NULL DEFAULT '' AFTER `product_id`");

$installer->getConnection()->addColumn($installer->getTable('sales/bestsellers_aggregated_yearly'), 'product_type_id',
    "TEXT NOT NULL DEFAULT '' AFTER `product_id`");

$installer->endSetup();