<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * ユーザーがリクエストを実行できるかどうかを判断します。
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // 必要に応じて認可ロジックを追加
    }

    /**
     * リクエストに対するバリデーションルールを返します。
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_date' => 'nullable|date',
            'genre' => 'nullable|string|max:100',
        ];
    }
}
