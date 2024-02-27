<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','responsible_name','responsible_phone','quota','intership_time_start','intership_time_end','jobdesk','learning','permitted_majors','permitted_majors','latitude','longitude','created_at','updated_at','deleted_at','created_by','updated_by','deleted_by'];

}
