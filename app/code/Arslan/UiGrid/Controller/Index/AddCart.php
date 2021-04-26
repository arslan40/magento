<?php 

namespace Arslan\UiGrid\Controller\Index;
use Magento\Framework\Controller\Result\JsonFactory;

class AddCart extends \Magento\Framework\App\Action\Action
{
      /**
     * Result page factory
     *
     * @var \Magento\Framework\Controller\Result\JsonFactory;
     */
    protected $_resultJsonFactory;  
    protected $resultPageFactory;
    protected $formKey;  
    protected $cart;
    protected $product;
    protected $checkoutSession;
     
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        JsonFactory $resultJsonFactory,
        \Magento\Framework\Data\Form\FormKey $formKey,
        \Magento\Quote\Api\CartRepositoryInterface $cartRepo,
        \Magento\Framework\DataObject\Factory $dataObject,
        \Magento\Checkout\Model\Cart $cart,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Catalog\Model\Product $product,
        array $data = []) 

    {
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->resultPageFactory = $resultPageFactory;
        $this->formKey = $formKey;
        $this->cart = $cart;
        $this->cartRepo = $cartRepo;
        $this->checkoutSession = $checkoutSession;
        $this->dataObject = $dataObject;
        
        $this->product = $product;   
        parent::__construct($context);
    }
       
    public function execute()
    {
        // die('~');
        // $quote = $this->checkoutSession->getQuote();
        $productId =19;     // Your Product Id
        $params = array(
                    'form_key' => $this->formKey->getFormKey(),
                    'product' => $productId,             
                    'qty'   =>1     //quantity of product            
                ); 
                
        //Load the product based on productID  
        $_product = $this->product->load($productId);
        // $quote->addProduct($_product, $this->dataObject->create($params));
        // $this->cartRepo->save($quote);   
        $this->cart->addProduct($_product, $params);
        $this->cart->save();
        return $this->resultPageFactory->create();

    }


}