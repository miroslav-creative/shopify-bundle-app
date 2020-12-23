<?php

// any_in_array() is not in the Array Helper, so it defines a new function
function getShopify()
{
  $config = array(
    'ShopUrl' => 'pick-n-mix-london.myshopify.com',
    'ApiKey' => '5e872cea3b147bb2da168053b60cc593',
    'Password' => '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',
  );

  return \PHPShopify\ShopifySDK::config($config);
}