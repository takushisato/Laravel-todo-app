<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDo\StoreRequest;
use App\Http\Requests\ToDo\UpdateRequest;
use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ToDoを取得して返却する
        $toDos = ToDo::get();
        return $toDos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // 新規のToDoモデルを作成する
        $toDo = new ToDo();

        // タイトルをToDo設定する
        $toDo->title = $request->get('title');

        // データベースにデータを登録する
        $toDo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {   
        // IDに紐づくToDoモデルを取得
        $toDo = ToDo::find($id);

        // タイトルをToDoモデルに設定
        $toDo->title = $request->get('title');

        // ToDoデータベースを更新
        $toDo->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // IDに紐づくToDoモデルを取得
        $toDo = ToDo::find($id);

        // データベースから削除する
        $toDo->delete();
    }
}
