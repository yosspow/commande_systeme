<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','contact','product_id'];

    public function produit(){

            return $this->belongsTo(Produit::class);

    }
    public function details_commande(){

        return $this->hasOne(Details_commandes::class,'commande_id','id');

}
}
