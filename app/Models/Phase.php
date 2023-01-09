<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;
    protected $table = 'phases';
    protected $primaryKey = 'id';
    protected $fillable = ['nom','duree','priorite','projets_id'];
}
