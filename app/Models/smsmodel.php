<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smsmodel extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'playsms_featureMsgtemplate';
    protected $fillable = [
        't_title',
        't_text',
    ];
    public $timestamps = false;
}
