<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactGroupe extends Model
{
    use HasFactory;
    protected $table = 'playsms_featurePhonebook_group_contacts';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'gpid','pid'];
    public $timestamps = false;
    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'gpid');
    }
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'pid');
    }

}
