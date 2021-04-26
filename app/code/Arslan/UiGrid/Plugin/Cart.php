<?php

namespace Arslan\UiGrid\Plugin;

class Cart
{
   
    public function beforeAddProduct( 
    \Magento\Checkout\Model\Cart $subject,
    $productInfo,
    $requestInfo = null
    )
    {
        $requestInfo['qty'] = 10;  
        // increasing quantity to 5
        return array($productInfo, $requestInfo);
   } 

//    public function aroundAddProduct( 
//     \Magento\Checkout\Model\Cart $subject,
//     \Closure $proceed,
//     $productInfo,
//     $requestInfo = null
//     )
//     {
//         $requestInfo['qty'] = 5;  
//         $result=$proceed($productInfo,$requestInfo);
//         return $result;
//    } 

}
