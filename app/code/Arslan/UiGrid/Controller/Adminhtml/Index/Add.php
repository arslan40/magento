<?php 

namespace Arslan\UiGrid\Controller\Adminhtml\Index;

class Add extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    
	public function __construct(
        \Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
        )
        {
            parent::__construct($context);
            $this->resultPageFactory = $resultPageFactory;
        }
        
        public function execute()
        {
        // die('here');
		// die('llkjk');
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Insert Data')));

		return $resultPage;
	}


}