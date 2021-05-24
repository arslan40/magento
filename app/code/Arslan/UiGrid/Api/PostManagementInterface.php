<?php 
namespace Arslan\UiGrid\Api;
 
 
interface PostManagementInterface {


	/**
	 * GET for Post api
	 * @return Magento\Framework\Controller\Result\JsonFactory
	 */
	
	public function getPost();
}