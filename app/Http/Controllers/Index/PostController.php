<?php

namespace App\Http\Controllers\Index;

use App\Handlers\UploadHandler;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class postController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::withOrder($request->order)->paginate(20);
        return view('index.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $catetories = Category::all();
        return view('index.post.create', compact('post', 'catetories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|min:6',
            'category_id' => 'required',
            'body' => 'required: min:6'
        ]);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route('posts.show', $post->id)->with('success', '帖子发表成功');
    }

    /*
    *上传图片
    */
    public function uploadImage(Request $request, UploadHandler $upload)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success' => false,
            'msg' => '上传失败哈哈哈哈!',
            'file_path' => ''
        ];
        $validator = Validator::make($request->all(), [
            'upload_file' => 'mimes:jpeg,png,gif|dimensions:max_width=1500,max_height=1500|max:2000'
        ], [
            'upload_file.mimes' => '头像必须是 jpeg, png, gif 格式的图片',
            'upload_file.dimensions' => '图片尺寸不能大于1500',
            'upload_file.max' => '图片不能超过2000K',
        ]);
        if ($validator->fails()) {
            $data['msg'] = $validator->errors()->first('upload_file');
            return $data;
        } else {
            $data['file_path'] = $upload->save($request->upload_file, 'posts', Auth::id());
            $data['success'] = true;
            $data['msg'] = '上传成功';
            return $data;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first() ? Post::where('slug', $slug)->first() : Post::where('id', $slug)->first();
        if (empty($post)) {
            abort('404', '别瞎折腾了');
        } else {
            return view('index.post.show', compact('post'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        $catetories = Category::all();
        return view('index.post.create', compact('post', 'catetories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect($post->link())->with('success', '帖子更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('destory', $post);
        $post->delete();

        return redirect($post->link())->with('success', '成功删除！');
    }
}
