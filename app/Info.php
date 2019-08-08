<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected  $table='info';
    protected  $primaryKey='id';


    protected $fillable=['user_id','Name','StudenID','Password'];


    public function ResearchTopic(){
        return $this->belongsTo('App\ResearchTopic');
    }

}
