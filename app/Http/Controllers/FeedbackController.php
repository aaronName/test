<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Feedback::orderBy('id', 'DESC')->get();
        // 渲染模板并传递数据
        return view("index")->with("records", $records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Feedback::create([
            "name" => Request()->get("name"),
            "phone" => Request()->get("phone"),
            "title" => Request()->get("title"),
            "content" => Request()->get("content"),
        ]);
        return Redirect()->back()->with("message", "留言成功");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Feedback::find($id);
        // 渲染模板并传递入数据
        return view("edit")->with("record", $record);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Feedback::find($id);
        // 赋值
        $record->name = Request()->get("name");
        $record->phone = Request()->get("phone");
        $record->title = Request()->get("title");
        $record->content = Request()->get("content");
        // 保存记录
        $record->save();
        // 跳转回原来页面并闪出提示信息
        return Redirect()->back()->with("message", "编辑成功！");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feedback::destroy($id);
        return Redirect()->back()->with("message", "删除成功");
    }
}
