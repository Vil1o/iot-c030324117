<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    //
    use HasFactory;
    protected $fillable = ['Lamp_id', 'status'];

    public function lamp()
    {
        return $this->belongsTo(Lamp::class);
    }
}
