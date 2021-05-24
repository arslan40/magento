<?php 
namespace Arslan\UiGrid\Model;
 

class PostManagement {

    protected $_productCollectionFactory;

    public function __construct(       
        \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->jsonResultFactory = $jsonResultFactory;
    }

	/**
	 * {@inheritdoc}
	 */
	public function getPost()
	{
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // fetching only 3 products
        $result = $this->jsonResultFactory->create();
        $result->setData($collection->getdata());
        return $collection->getdata();
        // return $collection;
		// return 'api GET return the $param ' ;
	}
}