<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;

class Video extends Controller
{
    public function index()
    {
        //return \think\Response::create(\think\Url::build('/admin'), 'redirect');
		$model = Db::name("Video");
		$data = $model->where('type','视频安全')->where('release','超级管理员')->select();
		$this->view->assign("data", $data);
		return $this->fetch();
    }
}
