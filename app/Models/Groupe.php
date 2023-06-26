<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $table = 'playsms_featurePhonebook_group';
    protected $primarykey = 'id';
    protected $fillable = ['name','code'];
    public $timestamps = false;


    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'playsms_featurePhonebook_group_contacts', 'gpid', 'pid');
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
