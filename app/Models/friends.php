<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    use HasFactory;
    protected $fillable = ['nama','no_tlpn','alamat'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
}
