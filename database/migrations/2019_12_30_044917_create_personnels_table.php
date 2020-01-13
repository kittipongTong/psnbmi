<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tb_Name','100'); //ชื่อ
            $table->string('tb_LastName','100'); //นามสกุล
            $table->string('tb_Aeg','7'); // อายุ
            $table->string('tb_Address'); //ที่อยู่
              $table->string('districts'); //ตำบล่
              $table->string('amphures'); //อำเภอ
            $table->string('provinces'); //จังหวัด


            $table->string('tb_LowPressure','50'); //ความดันตัวบน
            $table->string('tb_HighPressure','50'); //ความดันตัวล่าง

            $table->string('weight','50'); // น้ำหนัก
              $table->string('tb_Height','50'); //ส่วนสูง
            $table->string('bmi','20'); //ค่า BMI
            $table->string('meaning'); // อยู่ในเกณฑ์
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}
