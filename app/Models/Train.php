<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'country', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'train_code', 'coaches', 'first_class', 'second_class', 'on_schedule', 'deleted', 'created_at', 'updated_at'];
}
