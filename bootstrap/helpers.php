<?php
/*
 * 导航高亮
 * @param string $path      当前地址栏访问链接
 * @param string $current   当前url链接
 * @return boolean 返回true||false
 * */
function is_active($path, $current){
    if (stripos($path, $current)===false){
        return false;
    }
    return true;
}

/*
 * 当前路由生成css类名
 * */
function route_class(){
    return str_replace('.', '-', Route::currentRouteName()).'-page';
}

/*
 * 生成帖子简介
 * */
function post_desc($string, $length=200){
    $desc=trim(preg_replace('/\r\n|\r|\n/', '', $string));
    return mb_substr($desc, 0, $length);
}

/*
 * 随机生成密码
 * */

function create_pwd($length=20){
    $characters=['3', '4', '6', '7', '8', '9', 'a', 'b', 'd', 'e', 'f', 'g', 'h', 'j', 'm', 'n', 'p', 'q', 'r', 't', 'u', 'x', 'y', 'A', 'B', 'D', 'E', 'F', 'G', 'H', 'J', 'M', 'N', 'P', 'Q', 'R', 'T', 'U', 'X', 'Y', '@', '*', '&', '$', '%'];
    $pwd='';
    for ($i=0; $i<$length; $i++){
        $pwd.=$characters[array_rand($characters, 1)];
    }
    return $pwd;
}