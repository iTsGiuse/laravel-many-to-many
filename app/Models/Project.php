<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'client_name', 'summary', 'image', 'type_id'];

    public function types(){
        return $this->belongsTo(Type::class);
    }
    
    public function technology(){
        return $this->belongsToMany(Technology::class, 'projects_technologies');
    }
}
