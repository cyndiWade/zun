<?php

/**
 * 商家表
 */
class GiftModel extends AdminBaseModel {
	
	//获取所有数据
	public function seek_all_data ($condition) {
		$con = array('is_del'=>0);
		array_add_to($con,$condition);
		$data = $this->where($con)->select();
		return $data;
	}
	
	
	//获取一条数据
	public function seek_one_data ($condition,$field = '*') {
		$con = array('is_del'=>0);
		array_add_to($con,$condition);
		return $this->where($con)->field($field)->find();
	}
	

	
	
	//删除一条数据
	public function del_one_data ($id) {
		return $this->where(array('id'=>$id))->data(array('is_del'=>-2))->save();
	}
	
	
	public function save_one_data ($id) {
		return $this->where(array('id'=>$id))->save();
	}

	

	
}

?>
