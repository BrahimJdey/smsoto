<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'playsms_featurePhonebook';
    protected $primarykey = 'id';
    protected $fillable = ['mobile', 'name','email','tags'];
    public $timestamps = false;
    public function groupes()
    {
        return $this->belongsToMany(Groupe::class, 'playsms_featurePhonebook_group_contacts', 'pid', 'gpid');
    }
    
    public function group()
    {
        return $this->belongsTo(Groupe::class);
    }
     

}
