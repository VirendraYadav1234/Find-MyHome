<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Home extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'User_id','Owner_Name','Mobile_Number','Area_Name','Address','Pin_Code','Price','Status'
    ];
    protected $primaryKey="User_id";
}