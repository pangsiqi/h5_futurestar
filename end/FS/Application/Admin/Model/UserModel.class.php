<?php 
namespace Admin\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel{    
	protected $_link = array(
		'teacher'  =>  array(
	            'mapping_type' => self::BELONGS_TO,
	            'class_name' => 'teacher',
	            'foreign_key' => 'teacher_id',
	            'mapping_name' => 'teacher',
		    ),
	);

}


 ?>