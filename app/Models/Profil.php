<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil'; //namanya hrs sama gk blh beda
    //CRUD
    //Mass Assignment
    // ada 2 cara deklarasi field/mengizinkan untuk di insert ke db
    //protected $fillable=['nim', 'nama','email','no-hp','jurusan','alamat'];
    protected $guarded=[]; // ini sama dgn $fillable kita isi semua nya, jd lbh rekomend untuk kita pk yg ini
    
}
