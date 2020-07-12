<?php


namespace app\admin\model;


use think\Model;

class Article extends Model
{
    protected static function init()
    {
        Article::event('before_insert', function ($data) {
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                $info = $file->validate(['size' => 102400000, 'ext' => 'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $thumb = '/tp5/' . 'public' . DS . 'uploads' . '/' . $info->getSaveName();
                    $data['thumb'] = $thumb;
                }
            }
        });
        
        Article::event('before_update', function ($data) {
            if ($_FILES['thumb']['tmp_name']) {
                $arts=Article::find($data->id);
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if (file_exists($thumbpath)){
                    @unlink($thumbpath);
                } 
                
                $file = request()->file('thumb');
                $info = $file->validate(['size' => 102400000, 'ext' => 'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $thumb = '/tp5/' . 'public' . DS . 'uploads' . '/' . $info->getSaveName();
                    $data['thumb'] = $thumb;
                }
              
                
            }
        });

        Article::event('before_delete', function ($data) {
           
                $arts=Article::find($data->id);
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if (file_exists($thumbpath)){
                    @unlink($thumbpath);
                }
        });
    }
}