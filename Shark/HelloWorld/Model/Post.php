<?php
namespace Shark\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
/** renderizaçãoEsta classe de modelo estenderá a classe e implementos AbstractModel . O IdentityInterface forçará a classe Model a definir o
 *  método que retornará um id único para o modelo. Você só deve usar esta interface se o seu modelo exigir a limpeza do cache após a operação do banco de dados e renderizar as informações para a página de frontend.Magento\Framework\Model\AbstractModel\Magento\Framework\DataObject\IdentityInterfacegetIdentities()  */
{
	const CACHE_TAG = 'shark_helloworld_post';

	protected $_cacheTag = 'shark_helloworld_post';

	protected $_eventPrefix = 'shark_helloworld_post';

	protected function _construct()
	{
		$this->_init('Shark\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}