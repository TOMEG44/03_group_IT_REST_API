<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'age','country','street','city','phone'];
    use HasFactory;
}
