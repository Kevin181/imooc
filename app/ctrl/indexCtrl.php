<?php
namespace app\ctrl;

//use core\lib\model;
use app\model\guestbookModel;

class IndexCtrl extends \core\imooc
{
	/**
	 * 所有留言
	 */
	public function index()
	{
        $model = new GuestbookModel();
        $data = $model->all();
        $this->assign('data', $data);
        $this->display('index.html');
	}

	/**
	 * 添加留言
	 */
	public function add()
	{
        $this->display('add.html');
	}

	/**
	 * 保存留言
	 */
	public function save()
	{
		$data['title'] = post('title');
		$data['content'] = post('content');
		$data['createtime'] = time();
		$model = new GuestbookModel();
		$ret = $model->addOne($data);
		if ($ret) {
			jump('/');
		} else{
			p('ERROR');
		}
	}

	/**
	 * 删除留言
	 */
	public function del()
	{
		$id = get('id', 0, 'int');
		if ($id) {
			$model =new GuestbookModel();
			$ret = $model->delOne($id);
			if ($ret) {
				jump('/');
			} else {
				exit('删除失败');
			}
		} else {
			exit('参数错误');
		}
		
	}
}