<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table ='Item';
    public $timestamps = false;
    protected $fillable =[
        'name','don_vi','so_luong','gia_nhap','gia_ban'
    ];
}
