<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Htt\Controllers\PostController;

class Post extends Model
{
    use HasFactory;
    // 一括で値を保存したいカラムを設定
    // セキュリティーのために
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
