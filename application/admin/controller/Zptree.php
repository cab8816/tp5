<?php


namespace app\admin\controller;


use app\admin\model\Zpadmin as Zpadminmodel;
use think\Controller;

class Zptree extends Common
{


    protected $beforeActionList = [
        'delsonzp' => ['only' => 'del'],
    ];

  public function index($mid=1){
      $ziapu = new \app\index\model\Zpadmin();
      $zptreeres=$ziapu->field('id,pId,name,peiou')->order('guanx,paih asc')->select();
      foreach ($zptreeres as $k=>$v){
          if ($v['peiou'] !=''){
              $v['name']=$v['name'].'(配偶:'.$v['peiou'].')';
          }
          $v['open']=true;
      }
      $zptreeres= json_encode($zptreeres);
//         dump($zptreeres);
      $cates = db('cate')->find(input('cateid'));
      $this->assign(array(
          'mid' => $mid,
          'cates' => $cates,
          'zptreeres' => $zptreeres,
      ));
      return view("index");
  }
    public function add()
    {

        $zpadmin = new  Zpadminmodel();
        if ($this->request->isPost()) {
            $data = input('post.');
            if ($data['guanx']==0 or$data['guanx']==1 or $data['guanx']==3 ){
                $data['xingb']=0;
            } else{
                $data['xingb']=1;
            }
//        $validate = \think\Loader::validate('cate');
//        if (!$validate->scene('add')->check($data)) {
//          $this->error($validate->getError());
//        }
            $data['name']= $data['xing'].$data['ming'];
            $zpadmin->data($data);

            $add = $zpadmin->save();
            $mid=$data['pid'];
            if ($add) {
                $this->success('添加人员成功', url('index',['mid'=>$mid]),null,1);
            } else {
                $this->error('添加人员失败');
            }
        }
        $zpadmins = $zpadmin->find(input('id'));
        $zpadminres = $zpadmin->mytree("guanx,paih");
        $this->assign(array(
            'zpadminres' => $zpadminres,
            'zpadmins' => $zpadmins,
        ));
        return view();
    }

    public function edit()
    {
        $zpadmin = new  Zpadminmodel();

        if (request()->isPost()) {

            $data = input('post.');
//        $validate = \think\Loader::validate('cate');
//        if (!$validate->scene('add')->check($data)) {
//          $this->error($validate->getError());
//        }
            $data['name']= $data['xing'].$data['ming'];
            $save = $zpadmin->update($data);
            $mid=$data['id'];
            if ($save !== false) {
                $this->success('修改族谱成员成功', url('index',['mid'=>$mid]),null,1);
            } else {
                $this->error('族谱成员修改失败');
            }
            return;
        }
        $zpadmins = $zpadmin->find(input('id'));
        $zpadminres = $zpadmin->mytree('guanx,paih asc');
        $this->assign(array(
            'zpadminres' => $zpadminres,
            'zpadmins' => $zpadmins,
        ));
        return view();
    }

    public function del()
    {
        $zpadmin = new  Zpadminmodel();
        $pid=$zpadmin->field("pid")->find(input('id'));
//        dump($pid["pid"]);die;
        $this->assign("pidres",$pid["pid"]);
        $mid=$pid["pid"];
        $del = db('zpadmin')->where('id',input('id'))->delete();
        if ($del) {
            $this->success('删除成功', url('index',['mid'=>$mid]),null,1);
        } else {
            $this->error('删除失败', url('lst'));

        }
    }

    public function delsonzp()
    {
        $zpid = input('id');//要删除的当前栏目的id

        $zpadmin = new  Zpadminmodel();
        $sonids = $zpadmin->getchilrenid($zpid);
        $allcateid = $sonids;
        $allcateid[] = $zpid;
//      $article = new ArtcleModel();
//      foreach ($allcateid as $k => $v) {
//        $zpadmin->where(array('id' => $v))->delete();
//      }
        if ($sonids) {

            db('zpadmin')->delete($sonids);
        }
    }

}