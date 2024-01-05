<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(){

        return $this->belongsTo(Expensecategory::class,'category_id','id'); //one to many relationship

    }
}
