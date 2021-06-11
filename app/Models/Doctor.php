<?php

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {
    public $timestamps = false;

    public function visits(){
        return $this->hasMany("App\Models\Visit");
    }
}
?>