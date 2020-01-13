<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
  protected $fillable = ['tb_Name','tb_LastName','tb_Aeg','tb_Height','weight','tb_Address','provinces',
  'amphures','districts','tb_LowPressure','tb_HighPressure','bmi','meaning',
  ];

  public function GetType(){
        return $this->hasOne(product_categories::class,'id','id');
    }

}
