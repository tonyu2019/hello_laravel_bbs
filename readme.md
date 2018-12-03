# Laravel BBS 学习版
 该项目来源依据【Laravel 教程 - Web 开发实战进阶 ( Laravel 5.5 )】教程进行编写，借鉴了教程中优雅的书写方式和利用插件的便捷性，但同时也摒弃了教程中一些对新手来说有一定的疑问或学习障碍的一部分书写方式。
 前台界面基本如官方，后台界面因为没有使用教程中提供的插件，自己找了套bootstrap模板。预览如下
 ![enter description here](https://raw.githubusercontent.com/646547989/hello_laravel_bbs/master/public/uploads/shot.jpg)
## 该项目推荐的插件：
#### 1. `mews/captcha` 验证码插件
安装方式：`composer require "mews/captcha:~2.0"` 

生成配置：`php artisan vendor:publish --provider='Mews\Captcha\CaptchaServiceProvider'`  

git 地址：[https://github.com/mewebstudio/captcha](https://github.com/mewebstudio/captcha "https://github.com/mewebstudio/captcha")
#### 2. 教程开发windows数据库推荐
官方推荐使用 HeidiSQL， 本人这里还是强烈推荐Navicat，一个安装包不管你连接本地、远程；MySql，SQL Server，SQLite，甚至是Oracle都完美支持，关键还是中文的。
#### 3. `Debugbar` 页面调优
很推荐的插件，像一个诊断器，很清晰的让你明白问题在哪儿？哪儿需要优化
安装方式：`composer require "barryvdh/laravel-debugbar:~3.1" --dev`  

生成配置：`php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"`  

git 地址：[https://github.com/barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar "https://github.com/barryvdh/laravel-debugbar")
#### 4. `Simditor`文本编辑器
相对于百度的editor小小小，但是功能齐全，界面简洁美观，很喜欢的一个编辑器
git 地址：[https://github.com/mycolorway/simditor/](https://github.com/mycolorway/simditor/ "https://github.com/mycolorway/simditor/")
> 注：本次发现这个编辑器还是有bug的，官方并未修复，bug1：图片过大会超过编辑器宽度，特别丑，编辑器css里定义一下max-width；bug2：后台验证图片上传失败编辑框里会给你转化一个base64的图片编码……
#### 5. `HTMLPurifier` XSS过滤器
永远不要相信用户的输入，选他就对了
安装方式：`composer require "mews/purifier:~2.0"`
生成配置：`php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"`
git 地址：[https://github.com/mewebstudio/Purifier](https://github.com/mewebstudio/Purifier "https://github.com/mewebstudio/Purifier")
#### 6. `Laravel-permission` 用户角色权限
这个插件放在推荐或者不推荐里很纠结，真的是要看个人了。之前ThinkPHP里用的AUTH验证，感觉也蛮简单的，在Laravel里还没比较使用过。
安装方式：`composer require "spatie/laravel-permission:~2.7"`
生成配置：`php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"`
git 地址：[https://github.com/spatie/laravel-permission](https://github.com/spatie/laravel-permission "https://github.com/spatie/laravel-permission")

## 教程中使用但是不推荐的插件
#### 1. `Intervention/image` 图片裁剪插件
该插件的基本功能就是将用户上传的过大的图片进行裁剪到合适的尺寸，个人觉得这纯粹是增加服务器压力，用户上传个图片不管合不合格你不光要每次验证大小，不合格的还要给用户处理一下，真正的老妈子。但是在新时代这种事情用不着了，会访问论坛贴吧的基本都是有些电脑常识的，你直接使用laraval自带的表单验证，限制其上传大小不就行了，不合格用户重新传，So Easy！！！
#### 2. `summerblue/generator` 代码生成器
此插件也是极度不建议使用的，当然高手略过；说说自己的感受，第一次看这个觉得好炫，一句代码，整个模块都有了，可是到后面修改这些文件的时候甚至不知道这些文件的存在，只能死跟教程，一个一个代码打，自己已经是被动学习了，效率太低了，你不知道这一句代码它都做了什么事情，远不如脚踏实地一步一步走，你写过哪段代码很清晰的知道在哪个位置，什么作用。
#### 3. `hieu-le/active` 代码高亮
个人感觉导航高亮只是一个判断当前访问链接等不等于对当前导航链接，没必要非得加载个插件吧，让你的Laravel不要吃太胖了，高亮判断很简单，高手有更好的办法提供下
```php
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
```
#### 4. `Guzzle` 和 `PinYin` SEO 友好的 URL
第一个基于百度翻译接口，第二个转换拼音，这种东西得对应需求，有需求就用，没需求还聊个啥。对于我个人来讲，论坛帖子太多了，大家只看标题，链接、url变得是越来越不重要了。如果你是做企业站，页面url需要自定义，但也不是生硬的翻译或者拼音，都是自定义的，这玩意儿也用不上。
> 个人应企业站的需求，一般自定义的栏目或者文章url我们不会再重复附带id这个字段，虽然这样做更好操作一下，个人的基本思路是路由只传递一个参数slug，控制器方法中查找这个slug，查不到意味着用户输入的是id，不是别名，就查id=slug的。
```php
//PostController
public function show($slug)
    {
        $post = Post::where('slug', $slug)->first() ? Post::where('slug', $slug)->first() : Post::where('id', $slug)->first();
        if (empty($post)) {
            abort('404', '别瞎折腾了');
        } else {
            return view('index.post.show', compact('post'));
        }
    }
//Post模型生成链接
public function link(){
        if (empty($this->slug)){
            return route('posts.show', ['post'=>$this]);
        }
        return route('posts.show', ['slug'=>$this->slug]);
    }
//这样贴子生成的链接就从例子中的20/hello-world变为hello-world了
```
#### 5. `sudo-su`，用户切换
测试用蛮好。真正上线作用不大
#### 6. `summerblue/administrator` 后台管理
这个插件感觉是我最不推荐的插件，没有之一。他最大的问题太慢太慢太慢。首先开发时候修改地方太多，随便加个菜单就要修改；第二冗余查询，项目中好多表都是关联性的，读取的时候反复读取，我只是本地开发，这个加载速度就让我受不了，哪儿能等到你上线。总之功能简单，加载太慢是太大的问题，特别不建议使用。

## 关于该项目需要注意的地方
#### 1. 使用composer安装Laravel5.5失败
关于本教程要注意的地方，很过使用window作为学习开发系统的童鞋，很多习惯于安装集成环境如：XAMPP、WAMP之类的，如果你下载的是一些之前的版本，那么恭喜你，打死你都装不上Laravel5.5的，因为集成环境大多使用的php5.6，达不到Laravel5.5安装标准，及时集成环境中有切换php版本的功能，但大多数默认还是php5.6，当你将集成环境php调整高版本之后，因为你没有调整windows中的环境变量，使得php指令依然对应的是php5.6，此时建议你修改下你的php环境变量指向
#### 2. Windows中上传至githup所需的密匙
这里推送一个操作链接吧[https://jingyan.baidu.com/article/a65957f4e91ccf24e77f9b11.html](https://jingyan.baidu.com/article/a65957f4e91ccf24e77f9b11.html "https://jingyan.baidu.com/article/a65957f4e91ccf24e77f9b11.html")

> 总结：项目差一个活跃用户需要用到crontab，本人是windows服务器，又没有安装虚拟机，下个项目将在homestead虚拟机中完成，敬请关注
