<?php 
namespace Admin\Model;
use Think\Model;

class ConfigModel extends Model{

    /* 自动验证规则 */
	protected $_validate = array( 
	);

    /* 自动完成规则 */
	protected $_auto = array( 
	);

	public function cache(){
		S('DB_CONFIG_DATA',null);
		$config = $this->getField ( 'name,value' );
		S('DB_CONFIG_DATA', $config);
	}
}