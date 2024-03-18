<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details_commandes extends Model
{
    use HasFactory;
    protected $fillable = ['tracking','shiping','Commande_id'];
    public function commandes(){

        return $this->belongsTo(Commande::class);

}
}
