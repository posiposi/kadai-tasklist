<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'status', 'user_id']; 
    
    //一対多の表現記述
    public function user() {
        return $this->belongsTo(User::class);
    }
}
