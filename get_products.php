<?php

include('config/config_sdk.php');

$products = $shopify->Product->get();

echo count($products);