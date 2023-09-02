<?php

namespace Mahim\Bondstein\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['id', 'title', 'description', 'created_by', 'created_at', 'updated_at'];
    
}
