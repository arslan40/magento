<?php
namespace Arslan\UiGrid\Model\ResourceModel\User;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	// protected $_idFieldName = 'id';
	// protected $_eventPrefix = 'mageplaza_helloworld_post_collection';
	// protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Arslan\UiGrid\Model\User', 'Arslan\UiGrid\Model\ResourceModel\User');
	}

}
