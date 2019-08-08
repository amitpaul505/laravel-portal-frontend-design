<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    //
    protected  $table='group';
    protected  $primaryKey='id';


    protected $fillable=['GroupID','Member','Status','Deadline','JudgementalView'];
}
