<?php
namespace Shark\HelloWorld\Model\ResourceModel;

/**classe abstrata \Magento\Framework\Model\ResourceModel\Db\AbstractDbque
 *  contém as funções para buscar informações do banco de dados. */

     class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{/** nome da tabela e a chave primária*/
		$this->_init('shark_helloworld_post', 'post_id');
	}
	
}