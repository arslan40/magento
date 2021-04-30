<?php
namespace Arslan\UiGrid\Block\Adminhtml;

use Magento\Backend\Block\Template;

class View extends Template
{
   public $_template = 'Arslan_UiGrid::view.phtml';

    public function __construct(
       \Magento\Backend\Block\Template\Context $context
    ) 
    {
       parent::__construct($context);
    }
}