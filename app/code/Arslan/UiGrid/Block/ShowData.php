<?php

namespace Arslan\UiGrid\Block;

class ShowData extends \Magento\Framework\View\Element\Template
{
	
	protected $helperData;
	
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Arslan\UiGrid\Helper\Data $helperData
		)
		{
			$this->helperData = $helperData;	
			parent::__construct($context);
		}
		
		public function show()
		{
			$en[0]=$this->helperData->getGeneralConfig('enable');
			$en[1]=$this->helperData->getGeneralConfig('display_text');
			$en[2]=$this->helperData->getGeneralConfig('textarea');
			$en[3]=$this->helperData->getGeneralConfig('checkbox');
			$en[4]=$this->helperData->getGeneralConfig('textarea');
			$en[5]=$this->helperData->getGeneralConfig('ranges');
			// die($en[5]);
			// exit();
			return $en;
		}
}