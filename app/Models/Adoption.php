<?php

namespace App\Models;

use App\Models\Orphan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adoption extends Model
{
    use HasFactory;
    protected $guarded = [];


public function orphans(){
    return $this->belongsTo(Orphan::class, 'orphan_id', 'id');
}

}
