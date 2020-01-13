<style>
    html,
    .container {

        background:#FDF5E6;
    }
    .body{
        background:#F5FFFA;
        font-size: 21px;
    }
    .AS{
      background:#FDF5E6;
    }
</style>

@extends('layouts.master')
@section('title','หน้าเพิ่มข้อมูล')
@section('content')

<div class="container">
<!-- <div class="container"> -->
<div class="row col-md-11">
  <div class="col-md-12 ">
    <br><br>
    <h3 align="center">เพิ่มข้อมูล</h3>
    <br><br>

          @if(count($errors)  > 0)
          <div class="alert alert-danger">
           <ul> @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
          </ul>
           </div>
          @endif
          @if(\Session::has('success'))
          <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div>
          @endif

          <form method="post" action="{{url('Personnel')}}">
          {{ csrf_field() }}

              <div class="form-row">
                <div class="col-md-4 mb-4">
                 <label for="validationDefaultUsername">ชื่อ</label>
                 <div class="input-group">
                   <div class="input-group-prepend">
                   </div>
                   <input type="text"  name="tb_Name" class="form-control" id="validationDefaultUsername" placeholder="ชื่อ" aria-describedby="inputGroupPrepend2" required>
                 </div>
               </div>

                <div class="col-md-4 mb-4">
                 <label for="validationDefaultUsername">นามสกุล</label>
                 <div class="input-group">
                   <div class="input-group-prepend">
                   </div>
                   <input type="text"  name="tb_LastName" class="form-control" id="validationDefaultUsername" placeholder="นามสกุล" aria-describedby="inputGroupPrepend2" required>
                 </div>
               </div>

              </div>

              <div class="form-row">
                <!-- <div class="form-group col-md-2">
                  <label for="inputEmail4">อายุ</label>
                  <input type="number" name="tb_Aeg" class="form-control" id="inputEmail4" placeholder="อายุ">
                </div> -->

                <div class="col-md-4 mb-4">
                 <label for="validationDefaultUsername">นามสกุล</label>
                 <div class="input-group">
                   <div class="input-group-prepend">
                   </div>
                   <input type="number"  name="tb_Aeg" class="form-control" id="validationDefaultUsername" placeholder="อายุ" aria-describedby="inputGroupPrepend2" required>
                 </div>
               </div>

               <div class="col-md-4 mb-4">
                <label for="validationDefaultUsername">ป้อนส่วนสูงของคุณ</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="number"  name="tb_Height" class="form-control" id="validationDefaultUsername" placeholder="อายุ" aria-describedby="inputGroupPrepend2" required>
                  <select type="multiple" id="heightunits" >
                      <option value="metres" selected="selected" >เซนติเมตร</option>
                      <option value="inches">นิ้ว</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ป้อนส่วนสูงของคุณ: </label>
                  <p> <input type="number" name="tb_Height" class="form-control" id="height" placeholder="ความดันตัวบน"/>
                      <select type="multiple" id="heightunits" >
                          <option value="metres" selected="selected" >เซนติเมตร</option>
                          <option value="inches">นิ้ว</option>
                      </select>
                  </p>
                </div>

                <div class="form-group col-md-6">
                  <label for="inputPassword4">ใส่น้ำหนักของคุณ: </label>
                  <p><input type="number" name="tb_Weight" class="form-control" id="weight" placeholder="ความดันตัวล่าง"/>
                      <select type="multiple" id="weightunits">
                          <option value="kg" selected="selected">กิโลกรัม</option>
                          <option value="lb">ปอนด์</option>
                      </select>
                  </p>
                </div>
              </div>

                </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">ที่อยู่</label>
                  <textarea class="form-control"  name="tb_Address" id="exampleFormControlTextarea1" placeholder="ที่อยู่" rows="3"></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label for="inputEmail4">อำเภอ</label>
                  <input type="text" name="amphures" class="form-control" id="inputEmail4" placeholder="อำเภอ">

                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" name="provinces" for="inputGroupSelect01">จังหวัด</label>
                </div>
                <select class="custom-select"  name="provinces" id="provinces">
                  <option value="">เลือกจังหวัด</option>
                  <option value="64">กระบี่</option>
                  <option value="1">กรุงเทพมหานคร</option>
                  <option value="56">กาญจนบุรี</option>
                  <option value="34">กาฬสินธุ์</option>
                  <option value="49">กำแพงเพชร</option>
                  <option value="28">ขอนแก่น</option>
                  <option value="13">จันทบุรี</option>
                  <option value="15">ฉะเชิงเทรา</option>
                  <option value="11">ชลบุรี</option>
                  <option value="9">ชัยนาท</option>
                  <option value="25">ชัยภูมิ</option>
                  <option value="69">ชุมพร</option>
                  <option value="45">เชียงราย</option>
                  <option value="38">เชียงใหม่</option>
                  <option value="72">ตรัง</option>
                  <option value="14">ตราด</option>
                  <option value="50">ตาก</option>
                  <option value="17">นครนายก</option>
                  <option value="58">นครปฐม</option>
                  <option value="36">นครพนม</option>
                  <option value="19">นครราชสีมา</option>
                  <option value="63">นครศรีธรรมราช</option>
                  <option value="47">นครสวรรค์</option>
                  <option value="3">นนทบุรี</option>
                  <option value="76">นราธิวาส</option>
                  <option value="43">น่าน</option>
                  <option value="77">บึงกาฬ</option>
                  <option value="20">บุรีรัมย์</option>
                  <option value="4">ปทุมธานี</option>
                  <option value="62">ประจวบคีรีขันธ์</option>
                  <option value="16">ปราจีนบุรี</option>
                  <option value="74">ปัตตานี</option>
                  <option value="5">พระนครศรีอยุธยา</option>
                  <option value="44">พะเยา</option>
                  <option value="65">พังงา</option>
                  <option value="73">พัทลุง</option>
                  <option value="53">พิจิตร</option>
                  <option value="52">พิษณุโลก</option>
                  <option value="61">เพชรบุรี</option>
                  <option value="54">เพชรบูรณ์</option>
                  <option value="42">แพร่</option>
                  <option value="66">ภูเก็ต</option>
                  <option value="32">มหาสารคาม</option>
                  <option value="37">มุกดาหาร</option>
                  <option value="46">แม่ฮ่องสอน</option>
                  <option value="24">ยโสธร</option>
                  <option value="75">ยะลา</option>
                  <option value="33">ร้อยเอ็ด</option>
                  <option value="68">ระนอง</option>
                  <option value="12">ระยอง</option>
                  <option value="55">ราชบุรี</option>
                  <option value="7">ลพบุรี</option>
                  <option value="40">ลำปาง</option>
                  <option value="39">ลำพูน</option>
                  <option value="30">เลย</option>
                  <option value="22">ศรีสะเกษ</option>
                  <option value="35">สกลนคร</option>
                  <option value="70">สงขลา</option>
                  <option value="71">สตูล</option>
                  <option value="2">สมุทรปราการ</option>
                  <option value="60">สมุทรสงคราม</option>
                  <option value="59">สมุทรสาคร</option>
                  <option value="18">สระแก้ว</option>
                  <option value="10">สระบุรี</option>
                  <option value="8">สิงห์บุรี</option>
                  <option value="51">สุโขทัย</option>
                  <option value="57">สุพรรณบุรี</option>
                  <option value="67">สุราษฎร์ธานี</option>
                  <option value="21">สุรินทร์</option>
                  <option value="31">หนองคาย</option>
                  <option value="27">หนองบัวลำภู</option>
                  <option value="6">อ่างทอง</option>
                  <option value="26">อำนาจเจริญ</option>
                  <option value="29">อุดรธานี</option>
                  <option value="41">อุตรดิตถ์</option>
                  <option value="48">อุทัยธานี</option>
                  <option value="23">อุบลราชธานี</option>
                </select>
              </div>



                <div class="form-group col-md-12">
                  <label for="inputEmail4">ตำบล</label>
                  <input type="text" name="districts" class="form-control" id="inputEmail4" placeholder="ตำบล">
                </div>
              </div>
              <!--
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">ป้อนส่วนสูงของคุณ: </label>
                  <p> <input type="number" name="tb_LowPressure" class="form-control" id="height" placeholder="ความดันตัวบน"/>
                      <select type="multiple" id="heightunits" >
                          <option value="metres" selected="selected" >เซนติเมตร</option>
                          <option value="inches">นิ้ว</option>
                      </select>
                  </p>
                </div>

                <div class="form-group col-md-4">
                  <label for="inputPassword4">ใส่น้ำหนักของคุณ: </label>
                  <p><input type="number" name="tb_HighPressure" class="form-control" id="weight" placeholder="ความดันตัวล่าง"/>
                      <select type="multiple" id="weightunits">
                          <option value="kg" selected="selected">กิโลกรัม</option>
                          <option value="lb">ปอนด์</option>
                      </select>
                  </p>
                </div>
              </div> -->

              <!-- <input type="submit" class="btn btn-success" value="คำนวนค่า BMI" onclick="computeBMI();"> -->

              <hr>
               <h4>ค่า BMI : <span  name="tb_BMI" id="output">?</span></h4>
              <!-- <hr> -->

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputPassword4">ค่า BMI</label>
                  <input type="number" name="tb_BMI"  class="form-control" id="output" placeholder="ค่า BMI">
                </div>

                <!-- <div class="form-group col-md-4">
                  <label for="inputEmail4">วันที่รับบริการ</label>
                  <input type="date" name="tb_Date" class="form-control" id="inputEmail4" placeholder="วันที่รับบริการ">
                </div> -->
              </div>

          <br>
        <div class="form-group">
          <input type="submit"   onclick="computeBMI();" class="btn btn-outline-success col-md-2  " value="บันทึกข้อมูล"
          <div > <a href="{{route('Personnel.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a> </div>
        </div>

          <br>
        </div>
        </div>
      <!-- </div> -->
   <head>
       <!-- <title>BMI Calculator</title> -->
       <script type="text/javascript">

           function computeBMI() {
               // user inputs
               var height = Number(document.getElementById("height").value);
               var heightunits = document.getElementById("heightunits").value;
               var weight = Number(document.getElementById("weight").value);
               var weightunits = document.getElementById("weightunits").value;


               //Convert all units to metric
               if (heightunits == "inches") height /= 39.3700787;
               if (weightunits == "lb") weight /= 2.20462;

               //Perform calculation

               //        var BMI = weight /Math.pow(height, 2)*10000;
               var BMI = Math.round(weight / Math.pow(height, 2) * 10000);

               //Display result of calculation
               document.getElementById("output").innerText = Math.round(BMI * 100) / 100;

               var output = Math.round(BMI * 100) / 100
               if (output < 18.5)
                   document.getElementById("comment").innerText = "Underweight";
               else if (output >= 18.5 && output <= 25)
                   document.getElementById("comment").innerText = "Normal";
               else if (output >= 25 && output <= 30)
                   document.getElementById("comment").innerText = "Obese";
               else if (output > 30)
                   document.getElementById("comment").innerText = "Overweight";
               // document.getElementById("answer").value = output;
           }
       </script>


@endsection
