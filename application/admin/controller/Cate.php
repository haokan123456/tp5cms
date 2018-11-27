<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;

class Cate extends Controller{

	public function index(){}

	public function add(){
		return view();
	}

	public function tianjia(){
		$cate=input();		
		$dd=Db::table('tpcms_category')->insert($cate);
		if($dd){
			$this->success('添加栏目成功！','');
		}
		else{
			$this->error('添加栏目失败！','');
		}
	}

	public function clst(){
		$rs=Db::table('tpcms_category')->select();		
		return view('clst',['data'=>$rs]);
	}

	public function del(){}

	public function chghide(){
		$data=input();
		$dd=Db::table('tpcms_category')->where('id',$data['cateid'])->update('ishide',$data['ishide']);
		echo $dd;
	}
}