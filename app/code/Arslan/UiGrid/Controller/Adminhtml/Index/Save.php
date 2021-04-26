<?php 
namespace Arslan\UiGrid\Controller\Adminhtml\Index;

// die('here');
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Save extends \Magento\Backend\App\Action
{
    //  @var  \Magento\Framework\View\Result\Page /
    protected $resultPageFactory;
    protected $resultuserFactory;
    // @param \Magento\Framework\App\Action\Context $context 
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Arslan\UiGrid\Model\UserFactory $userFactory
        )
       
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultuserFactory = $userFactory;
        parent::__construct($context);
    }
     
    public function execute()
    {
        /** @var Page $resultPage */
        $input = $this->getRequest()->getParams();
        // var_dump($input);
        // die('~');
        $post = $this->resultuserFactory->create(); 
        $post->setData($input)->save();
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('users/index/index');
    }
}