<?php
    
    
    namespace app\index\controller;
    
    
    class Zpadmin extends Common
    {
        public function index()
        {
            
            $ziapu = new \app\index\model\Zpadmin();
//            $zpres = $ziapu->mytree('id ase');
            $zptreeres=$ziapu->field('id,pId,xing,ming,guanx,paih,name,peiou')->order('guanx,paih asc')->select();
            foreach ($zptreeres as $k=>$v){
                $v['open']=true;
            }
            $arrs=array();
            $zptreeres=$ziapu->recur($arrs,$zptreeres);

//           dump($zptreeres);die;
           $zptreeres= json_encode($zptreeres,JSON_UNESCAPED_UNICODE);
//         dump($zptreeres);die;
            $cates = db('cate')->find(input('cateid'));
            $this->assign(array(
                'cates' => $cates,
//                'zpres' => $zpres,
                'zptreeres' => $zptreeres,
            ));
            return view('zpadmin');
        }
        
      
        
    }