<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $primaryKey = 'customer_id';

    public $table = 'customer_info';

    //@TODO Remember to make id public if you need to

    protected $fillable = [ 'customer_name', 'house_number', 'street_name', 'address', 'phone_number', 'age', 'gender' ];

    public function males()
    {
        return $this->hasMany('App\Male');
    }

    public function females()
    {
        return $this->hasMany('App\Female');
    }
}
