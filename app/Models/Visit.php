<?php

use Illuminate\Database\Eloquent\Model;

class Visit extends Model {
    public $timestamps = false;
    protected $fillable = ['paziente', 'medico', 'data_visita'];

    public function users(){
        return $this->belongsTo("App\Models\User");
    }

    public function doctor(){
        return $this->belongsTo("App\Models\Doctor", "id_medico");
    }
    
}
?>