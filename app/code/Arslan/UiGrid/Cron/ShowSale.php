<?php

namespace Arslan\UiGrid\Cron;

class ShowSale
{
    protected $resultPageFactory;
    protected $_product;
    public function __construct(
      \Magento\Framework\App\Action\Context $context,
      \Magento\Framework\View\Result\PageFactory $resultPageFactory,

      \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productFactory,

      \Magento\Catalog\Model\ProductRepository $productRepository,
      \Magento\Catalog\Model\Product $product,
      \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $order
  ) {

      $this->resultPageFactory = $resultPageFactory;

      $this->_productFactory = $productFactory;
      $this->_product = $product;
      $this->_order = $order;
  }

    public function execute()
    {
        echo ("<pre>");
        $collection = $this->_productFactory->create();
        foreach ($collection as $item) {

            $orderCollection = $this->_order->create();
            $product_id = $item->getData("entity_id");
            $orderCollection->getSelect()
                ->join(
                    'sales_order_item',
                    'main_table.entity_id = sales_order_item.order_id'
                )->where('product_id = ' . $product_id);

            $prod = $this->_product->load($product_id);
            echo ("<pre>");
            $prod->setCustomAttribute("test_demo", $orderCollection->count());
            $prod->save();
            var_dump($prod->getData());
            // print_r($orderCollection->count());
        }
        die();

    }
}