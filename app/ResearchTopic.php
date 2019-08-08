<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchTopic extends Model
{
    //
    protected  $table='research topic';
    protected  $primaryKey='id';


    protected $fillable=['Name','Domain ID','Semester','Type ID','Level','Description','Faculty ID','Status','File Status'];
}
