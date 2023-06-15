<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progsms extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'playsms_featureSchedule';

    protected $fillable = [
        'id', 'name','message', 'schedule_rule',
    ];
    public $timestamps = false;

}
