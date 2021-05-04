<?php 
namespace Arslan\UiGrid\Model;
use Magento\Framework\Model\AbstractModel;
class User extends AbstractModel
{    
     protected function _construct()
     {
          $this->_init('Arslan\UiGrid\Model\ResourceModel\User');
     }

     // public function getIdentities()
     // {
     //      return [self::CACHE_TAG . '_' . $this->getId()];
     // }

     // public function getDefaultValues()
     // {
     //      $values = [];

     //      return $values;
     // }


}

?>