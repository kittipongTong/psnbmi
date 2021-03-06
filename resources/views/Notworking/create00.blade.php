@extends('layouts.master')
@section('title','หน้าเพิ่มข้อมูล')
@section('content')

<style>
    html,
    .container {

        background:#EEEEEE;
    }
    /* .form-row{
      background:#EEEEEE;
    } */
</style>
ิ
<!-- <div class="container"> -->
<div class="container">
<div class="row col-md-12">
  <div class="col-md-12 ">
    <br><br>
    <h3 align="center"><h1 align="center">เพิ่มข้อมูล</h1></h3>
    <hr><br><br>

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
                <div class="col-md-6 mb-6">
                 <label for="validationDefaultUsername">ชื่อ</label>
                 <div class="input-group">
                   <div class="input-group-prepend">
                   </div>
                   <input type="text"  name="tb_Name" class="form-control" id="validationDefaultUsername" placeholder="ชื่อ" aria-describedby="inputGroupPrepend2" required>
                 </div>
               </div>

                <div class="col-md-6 mb-6">
                 <label for="validationDefaultUsername">นามสกุล</label>
                 <div class="input-group">
                   <div class="input-group-prepend">
                   </div>
                   <input type="text"  name="tb_LastName" class="form-control" id="validationDefaultUsername" placeholder="นามสกุล" aria-describedby="inputGroupPrepend2" required>
                 </div>
               </div>
              </div>
              <br><br>
              <div class="form-row">
                <div class="col-md-4 mb-4">
                 <label for="validationDefaultUsername">อายุ</label>
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
                  <input type="number"  name="tb_Height" class="form-control" id="validationDefaultUsername" placeholder="ป้อนส่วนสูงของคุณ" aria-describedby="inputGroupPrepend2" required>
                  <select type="number" id="tb_Height" >
                      <option value="metres" selected="selected" >เซนติเมตร</option>
                      <option value="inches">นิ้ว</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4 mb-4">
               <label for="validationDefaultUsername">ใส่น้ำหนักของคุณ : </label>
               <div class="input-group">
                 <div class="input-group-prepend">
                 </div>
                 <input type="number"  name="tb_Weight" class="form-control" id="weight" placeholder="ป้อนส่วนสูงของคุณ" aria-describedby="inputGroupPrepend2" required>
                 <select type="number" id="tb_Weight">
                     <option value="kg" selected="selected">กิโลกรัม</option>
                     <option value="lb">ปอนด์</option>
                 </select>
               </div>
             </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-6">
             <label for="validationDefaultUsername">ความดันตัวบน</label>
             <div class="input-group">
               <div class="input-group-prepend">
               </div>
               <input type="text"  name="tb_LowPressure" class="form-control" id="validationDefaultUsername" placeholder="ชื่อ" aria-describedby="inputGroupPrepend2" required>
             </div>
           </div>

            <div class="col-md-6 mb-6">
             <label for="validationDefaultUsername">ความดันตัวล่าง</label>
             <div class="input-group">
               <div class="input-group-prepend">
               </div>
               <input type="text"  name="tb_HighPressure" class="form-control" id="validationDefaultUsername" placeholder="นามสกุล" aria-describedby="inputGroupPrepend2" required>
             </div>
           </div>
          </div>
              <br>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">ที่อยู่</label>
                  <textarea class="form-control"  name="tb_Address" id="exampleFormControlTextarea1" placeholder="ที่อยู่" rows="3"></textarea>
                </div>

                <div class="form-group col-md-12">
                  <!-- <label for="inputEmail4">ตำบล</label> -->
                  <input type="text" name="districts" class="form-control" id="inputEmail4" placeholder="ตำบล">
                </div>

                <div class="form-group col-md-12">
                  <!-- <label for="inputEmail4">อำเภอ</label> -->
                  <input type="text" name="amphures" class="form-control" id="inputEmail4" placeholder="อำเภอ">
                </div>
                <br>
                <div class="input-group col-md-12">
                  <!-- จังหวัด -->

                <div class="input-group-prepend">
                  <!-- <label class="input-group-text" name="provinces" for="inputGroupSelect01">จังหวัด</label> -->
                </div>

                <select class="custom-select"  name="provinces" id="provinces">
                  <option value="">เลือกจังหวัด</option>
                  <option value="กระบี่">กระบี่</option>
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
              </div>

              <hr>
               <h4>ค่า BMI : <span  name="tb_BMI" id="output">?</span></h4>
              <!-- <hr> -->

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputPassword4">ค่า BMI</label>
                  <input type="number" name="tb_BMI"  class="form-control" id="output" placeholder="ค่า BMI">
                </div>
              </div>
          <br>
        <div class="form-group">
          <input type="submit"   onclick="computeBMI();" class="btn btn-outline-success col-md-2  " value="บันทึกข้อมูล"
          <div> <a href="{{route('Personnel.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a> </div>
        </div>
        <br>
      </div>
  </div>
      <!-- </div> -->
   <head>

     <form name="bmiForm">
     Your Weight(kg): <input type="text" name="weight" size="10"><br />
     Your Height(cm): <input type="text" name="height" size="10"><br />

     <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />

     Your BMI: <input type="text" name="bmi" size="10"><br />
     This Means: <input type="text" name="meaning" size="25"><br />
     <input type="reset" value="Reset" />
     </form>



     <script language="JavaScript">
     <!--
     function calculateBmi() {
     var weight = document.bmiForm.weight.value
     var height = document.bmiForm.height.value
     if(weight > 0 && height > 0){
     var finalBmi = weight/(height/100*height/100)
     document.bmiForm.bmi.value = finalBmi
     if(finalBmi < 18.5){
     document.bmiForm.meaning.value = "That you are too thin."
     }
     if(finalBmi > 18.5 && finalBmi < 25){
     document.bmiForm.meaning.value = "That you are healthy."
     }
     if(finalBmi > 25){
     document.bmiForm.meaning.value = "That you have overweight."
     }
     }
     else{
     alert("Please Fill in everything correctly")
     }
     }
     //-->
     </script>


@endsection
