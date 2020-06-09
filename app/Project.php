<?php

namespace JQDeveloper;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];


    public function getRouteKeyName(){

        return 'url';
    }
}
