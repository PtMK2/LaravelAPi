<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // モデルに関連するテーブル名（デフォルトはモデル名の複数形で 'books'）
    protected $table = 'books';

    // ブラックリストの設定
    protected $guarded = ['id'];

    // 日付として扱うカラムの指定
    protected $dates = [
        'published_date', 
        'created_at', 
        'updated_at'
    ];

    /**
     * 外部キーを持つリレーションの定義
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
