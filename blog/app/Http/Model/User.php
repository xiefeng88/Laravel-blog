<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //设置需要进行操作的数据库的名称
    protected $table = "user";
    //设置主键
    protected $primaryKey = "user_id";
    //设置更新时间戳字段
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    public $timestamps = true;
}
