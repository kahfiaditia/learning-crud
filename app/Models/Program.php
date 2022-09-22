<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    //protected $fillable =['name','edulevel_id']; //yang bisa diisi apa aja
    protected $guarded =[''];
    //protected $guarded =['student_price']; //yang tidak bisa diisi apa aja, cara 4
    //$fillable dan $guarded tulis saja salah satu mekipun kosong

    protected $hidden =['created_at', 'updated_at']; // untuk menghiden data yang tampil di fungsi show Program

    public function edulevel()
    {
        return $this->belongsTo(Edulevels::class, 'edulevel_id'); //class diambil dari nama model
        // return $this->belongsTo('App\Edulevels');
    }
}
