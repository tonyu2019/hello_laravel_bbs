<?php
/**
 * 上传工具类
 * 此类只提供上传功能，不做上传验证，若使用验证请在使用上传功能的方法能利用request表单进行上传验证
 * Created by PhpStorm.
 * User: tony
 * Date: 2018/11/21
 * Time: 16:02
 */
namespace App\Handlers;

class UploadHandler{
    /**
     * 上传一个文件
     *
     * @param  object  $file        上传文件
     * @param  string  $folder      保存目录
     * @param  string  $file_prefix 文件保存前缀
     * @return array|boolean
     */
    public function save($file, $folder, $file_prefix){
        //保存目录
        $folder='/uploads/'.$folder.'/'.date('Y/m/d', time());
        //上传路径
        $upload_path=public_path().$folder;
        //拼接新的文件名
        $file_name=$file_prefix.'_'.uniqid($file_prefix).'.'.$file->getClientOriginalExtension();
        $file->move($upload_path, $file_name);
        return $folder.'/'.$file_name;
    }
}