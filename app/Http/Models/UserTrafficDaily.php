<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户每日流量统计
 * Class UserTrafficDaily
 * @package App\Http\Models
 */
class UserTrafficDaily extends Model
{
    protected $table = 'user_traffic_daily';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'node_id',
        'u',
        'd',
        'total',
        'traffic'
    ];

}