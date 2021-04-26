<?php

namespace Arslan\UiGrid\Plugin;

class Product
{
    // public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
    //     return $result*2;
    //  } 
    public function afterGetName( \Magento\Catalog\Model\Product $subject, $result)
    {
        //  echo "<pre>";
        // var_dump($result);
        // echo "</pre>";
     return "This is a After Plugin".$result;
    } 
}
