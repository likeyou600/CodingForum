<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UvaTopic extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime:Y/m/d H:i:s',
        'updated_at' => 'datetime:Y/m/d H:i:s',
    ];
    public function Post()
    {
        return $this->hasMany(Post::class);
    }
    public static function get_uva_topic_id($serial)
    {
        $result = UvaTopic::where('serial', $serial)->first()->id;
        return $result;
    }
}
