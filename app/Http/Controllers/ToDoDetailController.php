<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoDetail\StoreRequest;
use App\Http\Requests\ToDoDetail\UpdateRequest;
use App\Models\ToDoDetail;

class ToDoDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // IDに紐づくToDoモデルを取得
        $toDoDetail = new ToDoDetail();

        // ToDoDetailに値を設定する
        $toDoDetail->to_do_id = $request->get('to_do_id');
        $toDoDetail->name = $request->get('name');
        $toDoDetail->completed_flag = false;

        // ToDoDetailデータベースを更新
        $toDoDetail->save();
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
        // IDに紐づくToDoDetailモデルを取得
        $ToDoDetail = ToDoDetail::find($id);

        // タイトルをToDoDetailモデルに設定
        $ToDoDetail->name = $request->get('name');

        // ToDoDetailを更新
        $ToDoDetail->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // IDに紐づくToDoDetailモデルを取得
        $ToDoDetail = ToDoDetail::find($id);

        // データベースから削除する
        $ToDoDetail->delete();
    }
}
