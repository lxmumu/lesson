<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class userinfo extends admin {
    public	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('userinfo_model');

	}

	public function init() {
         $hash=$_SESSION['pc_hash'];
		// echo"userinfo modules";
	$info =	$this->db->select();
	// echo "<pre>";
	// print_r($info);
	// echo "</pre>";
	include $this->admin_tpl('userinfo');
	}
	public function del(){
         $id=$_GET['id'];
        $res= $this->db->delete(array('id'=>$id));
         if ($res) {
            showmessage('删除成功','?m=userinfo&c=userinfo&a=init');
         }else{
               showmessage('删除失败','?m=userinfo&c=userinfo&a=init');
         }

	}
	public function edit(){
		$id=$_GET['id'];
	    $rows=$this->db->get_one(array('id'=>$id));
	    $hash=$_SESSION['pc_hash'];
	    include $this->admin_tpl('edit');

	}
	public function update(){
		$where = array_splice($_POST,-1);
		// print_r($where);die;
		$res = $this->db->update($_POST,$where);
		if($res){
			showmessage('更新成功','?m=userinfo&c=userinfo&a=init');
		}else{
			showmessage('更新失败','?m=userinfo&c=userinfo&a=init');
		}
	}

}
?>