<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Male extends Model
{
    //
    protected $primaryKey = 'id';

    public $table = 'male';

    protected $fillable = [ 
        'chest_round', 
        'user_id',
        'shoulder', 
        'back', 
        'short_armhole', 
        'sleeve_length', 
        'sleeve_round', 
        'long_armhole', 
        'long_sleeve_round', 
        'long_sleeve_length',
        'elbow_round', 
        'wrist_round', 
        'shoulder_elbow_length', 
        'elbow_wrist', 
        'buttom', 
        'waist_knee_length', 
        'thigh_round', 
        'knee_round', 
        'ankle_round' 
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
