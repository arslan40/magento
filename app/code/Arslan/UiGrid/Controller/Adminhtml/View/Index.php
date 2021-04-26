<?php

namespace Arslan\UiGrid\Controller\Adminhtml\View;

class Index extends \Magento\Backend\App\Action
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
	
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('This is a Student View')));

		return $resultPage;
	}


}