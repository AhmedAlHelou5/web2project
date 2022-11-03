<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contries extends Model
{
    use HasFactory;
    protected  $table='countries';

    protected $appends = ["name_code"];

    public function getNameCodeAttribute() {
        return $this->name. '  '.$this->code;
    }

}
