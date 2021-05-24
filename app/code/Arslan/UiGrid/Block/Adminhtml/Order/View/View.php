<?php
namespace Arslan\UiGrid\Block\Adminhtml\Order\View;

class View extends \Magento\Framework\View\Element\Template
{

    protected $request;
    protected $product;
    protected $_category;

   /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\App\Request\Http $request,
        \Magento\Catalog\Model\ProductFactory $product,
        \Magento\Catalog\Helper\Category $category,
        \Magento\Catalog\Model\Category $categoryModel,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_registry = $registry;
        $this->_productFactory = $product;
        $this->_categoryFactory = $category;
        $this->categoryModel = $categoryModel;
        $this->request = $request;
        parent::__construct($context, $data);
    }

    public function getCatagory()
    {
        $orderId = $this->request->getParam('order_id');
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $order = $this->_objectManager->create('Magento\Sales\Model\Order')->load($orderId);
        $orderItems = $order->getAllItems();
        foreach($orderItems as $item)
        {
        // echo "Product ID :".$item->getProductId();
        $product = $this->_productFactory->create()->load($item->getProductId());
        $cats = $product->getCategoryIds();
        foreach($cats as $items)
        {

           $categoryData = $this->categoryModel->load($items);
           print_r( $categoryData->getName());
        }
        }
        
    }

   
}
