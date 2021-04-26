<?php

namespace Arslan\UiGrid\Controller\Adminhtml\Index;

class Edit extends \Magento\Backend\App\Action
{
	protected $resultPageFactory;
	protected $_userFactory;


	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Arslan\UiGrid\Model\UserFactory $userFactory,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		$this->userFactory = $userFactory;
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}

	public function execute()
	{
		// $this->_view->loadLayout();
		// $this->_view->renderLayout();
		// var_dump($id);
		// die('~');
		// $id=$this->getRequest()->getParam('id');
		// $this->_userFactory->create()->load($id);
		$resultPage = $this->resultPageFactory->create();
		
		return $resultPage;

		

	}
	
	
}

