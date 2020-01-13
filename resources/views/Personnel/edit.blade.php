
@extends('layouts.index')


<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <br><br>

      <h3 align="center"> แก้ไขข้อมูล</h3>

        <!-- แจ้งเตือน -->
          @if(count($errors)  > 0)
          <div class="alert alert-danger">
           <ul> @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
          </ul>
           </div>
          @endif

  <!-- แจ้งเตือน -->

    <form name="bmiForm" method="post" action="{{action('PersonnelController@update', $id)}}">
    {{csrf_field()}}


                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">ชื่อ</label>
                      <input type="text" name="tb_Name" class="form-control" id="inputEmail4" value="{{$Personnel->tb_Name}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">นามสกุล</label>
                      <input type="text" name="tb_LastName" class="form-control" id="inputPassword4"  value="{{$Personnel->tb_LastName}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">อายุ</label>
                      <input type="text" name="tb_Aeg" class="form-control" id="inputEmail4" value="{{$Personnel->tb_Aeg}}">
                    </div>
                  </div>


                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputEmail4">ที่อยู่</label>
                      <input type="text" name="tb_Address" class="form-control" id="inputEmail4" value="{{$Personnel->tb_Address}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">ตำบล</label>
                      <input type="text" name="districts" class="form-control" id="inputEmail4" value="{{$Personnel->districts}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">อำเภอ</label>
                      <input type="text" name="amphures" class="form-control" id="inputEmail4" value="{{$Personnel->amphures}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">จังหวัด</label>
                      <input type="text" name="provinces" class="form-control" id="inputEmail4" value="{{$Personnel->provinces}}">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">ความดันตัวบน</label>
                      <input type="text" name="tb_LowPressure" class="form-control" id="inputEmail4" value="{{$Personnel->tb_LowPressure}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">ความดันตัวล่าง</label>
                      <input type="text" name="tb_HighPressure" class="form-control" id="inputPassword4" value="{{$Personnel->tb_HighPressure}}">
                    </div>

                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="inputPassword4">น้ำหนัก</label>
                      <input type="text" name="weight" class="form-control" id="inputPassword4" value="{{$Personnel->weight}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">ส่วนสูง</label>
                      <input type="text" name="tb_Height" class="form-control" id="inputPassword4" value="{{$Personnel->tb_Height}}">
                    </div>

                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="inputPassword4">ค่า BMI</label>
                      <input type="text" name="bmi" class="form-control" id="inputPassword4" value="{{$Personnel->bmi}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">อยู่ในเกณฑ์</label>
                      <input type="text" name="meaning" class="form-control" id="inputPassword4" value="{{$Personnel->meaning}}">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="inputEmail4">วันที่รับบริการ</label>
                      <input type="text" name="created_at" class="form-control" id="inputEmail4" value="{{$Personnel->created_at}}">
                    </div>

                  </div>

                  <!-- เริ่ม -->
                  <!-- <div class="form-row">
                    <div class="col-md-6 mb-6">
                     <label for="validationDefaultUsername">ป้อนน้ำหนักของคุณ</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                       </div>
                       <input type="text"  name="weight" class="form-control" id="validationDefaultUsername" placeholder="ป้อนน้ำหนักของคุณ" aria-describedby="inputGroupPrepend2" required value="{{$Personnel->weight}}">
                     </div>
                   </div>

                   <div class="col-md-6 mb-6">
                    <label for="validationDefaultUsername">ป้อนส่วนสูงของคุณ</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text"  name="tb_Height" class="form-control" id="validationDefaultUsername" placeholder="ป้อนส่วนสูงของคุณ" aria-describedby="inputGroupPrepend2" required value="{{$Personnel->tb_Height}}">
                    </div>
                  </div>
                  </div>
                  <br>

                  <input class="btn btn-success" type="button" value="คำนวนค่า BMI" onClick="calculateBmi()">

                  <br><br>
                  <div class="form-row">
                    <div class="col-md-6 mb-6">
                     <label for="validationDefaultUsername">ค่า BMi</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                       </div>
                       <input type="text"  name="bmi" class="form-control" id="validationDefaultUsername" placeholder="ค่า BMi" aria-describedby="inputGroupPrepend2" required >
                     </div>
                   </div>

                   <div class="col-md-6 mb-6">
                    <label for="validationDefaultUsername">อยู่ในเกณฑ์</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text"  name="meaning" class="form-control" id="validationDefaultUsername" placeholder="อยู่ในเกณฑ์" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                  </div> -->
                  <!-- จบ -->

                  <div class="form-row">

                  </div>


                  <div class="form-group">
            <input type="submit" class="btn btn-outline-success col-md-2  " value="แก้ไขข้อมูล"
            <div > <a href="{{route('Personnel.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a> </div>
          </div>
          <input type="hidden" name="_method" value="PATCH"/>
        </form>
      </div>
    </div>
  </div>




  <script language="JavaScript">
  <!--
  function calculateBmi() {
  var weight = document.bmiForm.weight.value
  var tb_Height = document.bmiForm.tb_Height.value
  if(weight > 0 && tb_Height > 0){
  var finalBmi = weight/(tb_Height/100*tb_Height/100)
  document.bmiForm.bmi.value = finalBmi
  if(finalBmi < 18.5){
  document.bmiForm.meaning.value = "คุณผอมเกินไป."
  }
  if(finalBmi > 18.5 && finalBmi < 25){
  document.bmiForm.meaning.value = "คุณมีสุขภาพดี."
  }
  if(finalBmi > 25){
  document.bmiForm.meaning.value = "คุณมีน้ำหนักเกิน."
  }
  }
  else{
  alert("กรุณากรอกทุกอย่างให้ถูกต้อง")
  }
  }
  //-->
  </script>
