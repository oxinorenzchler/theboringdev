<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   public static function recent(){
   		$projects = Project::orderBy('created_at','desc')->limit(5)->get();

   		return $projects;
   }
}
