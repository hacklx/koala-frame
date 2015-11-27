<?php

namespace Install\Controller;
use Think\Controller;
use Think\Storage;

class IndexController extends Controller{
	//安装首页
	public function index(){
		if(Storage::has(APP_PATH . 'Common/Conf/install.lock')){
			$this->error('已经成功安装了Gms管理系统，请不要重复安装!');
		}
		session_destroy();
		session_start();
		session('step', 0);
		session('error', false);
		$this->display();
	}

	//安装完成
	public function complete(){
		$step = session('step');
		if($step != 3) {
			$this->redirect("Install/step{$step}");
		}
		$this->display();
	}
}
