<?php

namespace Arslan\UiGrid\Cron;


class ShowSale
{
  protected $resultPageFactory;
  protected $stockState;
  protected $_stockRegistry;


  public function __construct(
  \Magento\Framework\App\Action\Context $context,
  \Magento\Framework\View\Result\PageFactory $resultPageFactory,
  \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
  \Magento\CatalogInventory\Api\StockStateInterface $stockState,
  \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry
  ) {
    $this->_productCollectionFactory = $productCollectionFactory;
    $this->resultPageFactory = $resultPageFactory;
    $this->stockState = $stockState;
    $this->_stockRegistry = $stockRegistry;
    }

  public function execute()
  {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $productCollection = $objectManager->create('Magento\Reports\Model\ResourceModel\Report\Collection\Factory'); 
        $collection = $productCollection->create('Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection'); 

        $collection->setPeriod('month');
        //$collection->setPeriod('year');
        // $collection->setPeriod('day');

        foreach ($collection as $item) {
            print_r($item->getData());
            
        }
  }
}