<?php

namespace App;

use App\User;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{    
    protected $fillable = ['project_id','title','description','point','deadline'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status')->withTimestamps();
    }
    
}
