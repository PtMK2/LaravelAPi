<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // GET /api/example
    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'Item 1'],
            ['id' => 2, 'name' => 'Item 2'],
            ['id' => 3, 'name' => 'Item 3']
        ];
        return response()->json(['data' => $data], 200);
    }

    // POST /api/example
    public function store(Request $request)
    {
        $item = $request->all();
        // ここでデータベースにアイテムを保存する処理を実装可能
        return response()->json(['message' => 'Item created successfully', 'data' => $item], 201);
    }

    // GET /api/example/{id}
    public function show($id)
    {
        // ここでデータベースからアイテムを取得する処理を実装可能
        $item = ['id' => $id, 'name' => 'Item ' . $id];
        return response()->json(['data' => $item], 200);
    }

    // PUT/PATCH /api/example/{id}
    public function update(Request $request, $id)
    {
        $updatedData = $request->all();
        // ここでデータベースのアイテムを更新する処理を実装可能
        return response()->json(['message' => 'Item updated successfully', 'data' => $updatedData], 200);
    }

    // DELETE /api/example/{id}
    public function destroy($id)
    {
        // ここでデータベースからアイテムを削除する処理を実装可能
        return response()->json(['message' => 'Item deleted successfully'], 200);
    }
} 