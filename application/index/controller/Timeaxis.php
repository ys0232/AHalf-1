<?php
namespace app\index\controller

use app\index\model\User;
use think\Controller;
use think\Cookie;
use think\Request;
use think\View;

class Timeaxis extends Controller
{
     public function index(){
		 return View('Timeaxis');
	 }
}