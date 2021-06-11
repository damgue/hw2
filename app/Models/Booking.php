<?php

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    protected $table = 'bookings';

    protected $fillable = ['id_utente', 'nome'];

    //public $timestamps = false;

    public function users(){
        return $this->belongsTo("App\Models\User");
    }
}
?>