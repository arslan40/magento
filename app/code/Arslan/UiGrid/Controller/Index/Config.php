<?php

namespace Arslan\UiGrid\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;
	protected $resultPageFactory;


	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Arslan\UiGrid\Helper\Data $helperData,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory


	)
	{
		$this->helperData = $helperData;
		$this->resultPageFactory = $resultPageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// echo $this->helperData->getGeneralConfig('enable');
		// echo $this->helperData->getGeneralConfig('display_text');
		// echo $this->helperData->getGeneralConfig('textarea');
		// echo $this->helperData->getGeneralConfig('checkbox');
		// echo $this->helperData->getGeneralConfig('textarea');
		// echo $this->helperData->getGeneralConfig('ranges');
		// exit();
        return $this->resultPageFactory->create();

	}
}
