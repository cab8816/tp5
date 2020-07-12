<?php


namespace app\index\model;


use think\Model;

class Zpadmin extends Model
{
    public function mytree($order)
    {
        $myres = $this->field('id,pid,name')->order($order)->select();
        $dd = $this->sort($myres);
        return $dd;
    }

    public function sort($data, $pid = 0, $level = 0, $f = 0)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data, $v['id'], $level + 1);
            }

        }

        return $arr;
    }

    function recur($arrs, $category, $parent_id = 0)
    {

        foreach ($category as $k => $v) {


            if ($v['pId'] == $parent_id) {

                    $arr = array('name' => $v['name'], 'title' => $v['peiou'], 'children' => array());

                    $arr['children'] = $this->recur($arr["children"], $category, $v['id']);

                    array_push($arrs, $arr);
            }
        }

        return $arrs;
    }

    function recur2($arrs, $category, $parent_id = 0)
    {


        foreach ($category as $k => $v) {


            if ($v['pId'] == $parent_id) {
                if ($v['guanx'] == 1 || $v['guanx'] == 2) {

                }
                if ($v['guanx'] == 3 || $v['guanx'] == 4) {
                    $arr = array('name' => $v['name'], 'title' => '未知', 'children' => array());

                    $arr['children'] = $this->recur2($arr["children"], $category, $v['id']);

                    array_push($arrs, $arr);
                }
            }
        }
        return $arrs;
    }

    function baotatree($arrs, $category, $parent_id = 0)
    {
        foreach ($category as $k => $v) {
            if ($v['pId'] == $parent_id) {

                $arr = array('name' => $v['name'], 'title' => '未知', 'children' => array());
                $arr['children'] = $this->baotatree($arr["children"], $category, $v['id']);
                array_push($arrs, $arr);

            }
        }
        return $arrs;
    }
}