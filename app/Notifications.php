<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['type','url_id','receiver_id','comment_id'];

    public function receiver()
    {
        return $this->belongsTo('App\User', 'receiver_id');
    }

    public function identifier()
    {
        return $this->belongsTo('App\User', 'comment_id');
    }

}
