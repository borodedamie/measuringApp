<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Female extends Model
{
    //
    protected $primaryKey = 'id';

    public $table = 'female';

    protected $fillable = [ 'id',
     'user_id',
     'burst_round', 
     'shoulder', 
     'back', 
     'under_burst_round', 
     'end_to_end_nipple_length', 
     'waist_round',
     'elbow_wrist', 
     'armhole', 
     'sleeve_length', 
     'elbow_round', 
     'wrist_round', 
     'shoulder_elbow', 
     'hip_round', 
     'hip_length', 
     'knee_round', 
     'ankle_round', 
     'waist_knee_length', 
     'knee_feet_length', 
     'trouser_length', 
     'skirt', 
     'skirt_hip_round', 
     'skirt_thigh_round', 
     'skirt_knee_round', 
     'shirt_ankle_round', 
     'skirt_waist_knee_length', 
     'skirt_knee_feet_length' 
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
