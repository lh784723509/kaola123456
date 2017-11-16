<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Member extends Common
{
    public function member_manage()
    {
        $res=DB::name('member')->paginate(3);
        $state='state';
        $this->assign('state',$state);
        $this->assign('array',$res);
        return $this->fetch("member/member_manage");
    }
}
