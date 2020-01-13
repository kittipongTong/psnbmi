@extends('layouts.master')

@section('title')


@endsection
<!-- หน้าแนะนำสำหรับผู้ใช้งาน -->
@section('content')
<!-- <style>
    html,
    .container {

        background:#EEEEEE;
    }


</style> -->


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

      <form name="bmiForm" method="post" action="{{url('Personnel')}}">
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

       <div class="col-md-4 mb-4">
        <label for="validationDefaultUsername">อายุ</label>
        <div class="input-group">
          <div class="input-group-prepend">
          </div>
          <input type="text"  name="tb_Aeg" class="form-control" id="validationDefaultUsername" placeholder="อายุ" aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>
      </div>

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
        <div class="input-group col-md-12">
        <div class="input-group-prepend">
          <!-- <label class="input-group-text" name="provinces" for="inputGroupSelect01">จังหวัด</label> -->
        </div>
        <select class="custom-select"  name="provinces" id="provinces">
          <option value="">เลือกจังหวัด</option>
          <option value="กระบี่">กระบี่</option>
          <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
          <option value="56">กาญจนบุรี</option>
          <option value="กาญจนบุรี">กาฬสินธุ์</option>
          <option value="กำแพงเพชร">กำแพงเพชร</option>
          <option value="ขอนแก่น">ขอนแก่น</option>
          <option value="จันทบุรี">จันทบุรี</option>
          <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
          <option value="ชลบุรี">ชลบุรี</option>
          <option value="ชัยนาท">ชัยนาท</option>
          <option value="ชัยภูมิ">ชัยภูมิ</option>
          <option value="ชุมพร">ชุมพร</option>
          <option value="เชียงราย">เชียงราย</option>
          <option value="เชียงใหม่">เชียงใหม่</option>
          <option value="ตรัง">ตรัง</option>
          <option value="ตราด">ตราด</option>
          <option value="ตาก">ตาก</option>
          <option value="นครนายก">นครนายก</option>
          <option value="นครปฐม">นครปฐม</option>
          <option value="นครพนม">นครพนม</option>
          <option value="นครราชสีมา">นครราชสีมา</option>
          <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
          <option value="นครสวรรค์">นครสวรรค์</option>
          <option value="นนทบุรี">นนทบุรี</option>
          <option value="นราธิวาส">นราธิวาส</option>
          <option value="น่าน">น่าน</option>
          <option value="บึงกาฬ">บึงกาฬ</option>
          <option value="บุรีรัมย์">บุรีรัมย์</option>
          <option value="ปทุมธานี">ปทุมธานี</option>
          <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
          <option value="ปราจีนบุรี">ปราจีนบุรี</option>
          <option value="ปัตตานี">ปัตตานี</option>
          <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
          <option value="พะเยา">พะเยา</option>
          <option value="พังงา">พังงา</option>
          <option value="พัทลุง">พัทลุง</option>
          <option value="พิจิตร">พิจิตร</option>
          <option value="พิษณุโลก">พิษณุโลก</option>
          <option value="เพชรบุรี">เพชรบุรี</option>
          <option value="เพชรบูรณ์">เพชรบูรณ์</option>
          <option value="แพร่">แพร่</option>
          <option value="ภูเก็ต">ภูเก็ต</option>
          <option value="มหาสารคาม">มหาสารคาม</option>
          <option value="มุกดาหาร">มุกดาหาร</option>
          <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
          <option value="ยโสธร">ยโสธร</option>
          <option value="ยะลา">ยะลา</option>
          <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
          <option value="ระนอง">ระนอง</option>
          <option value="ระยอง">ระยอง</option>
          <option value="ราชบุรี">ราชบุรี</option>
          <option value="ลพบุรี">ลพบุรี</option>
          <option value="ลำปาง">ลำปาง</option>
          <option value="ลำพูน">ลำพูน</option>
          <option value="เลย">เลย</option>
          <option value="ศรีสะเกษ">ศรีสะเกษ</option>
          <option value="สกลนคร">สกลนคร</option>
          <option value="สงขลา">สงขลา</option>
          <option value="สตูล">สตูล</option>
          <option value="สมุทรปราการ">สมุทรปราการ</option>
          <option value="สมุทรสงคราม">สมุทรสงคราม</option>
          <option value="สมุทรสาคร">สมุทรสาคร</option>
          <option value="สระแก้ว">สระแก้ว</option>
          <option value="สระบุรี">สระบุรี</option>
          <option value="สิงห์บุรี">สิงห์บุรี</option>
          <option value="สุโขทัย">สุโขทัย</option>
          <option value="สุพรรณบุรี">สุพรรณบุรี</option>
          <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
          <option value="สุรินทร์">สุรินทร์</option>
          <option value="หนองคาย">หนองคาย</option>
          <option value="หนองบัวลำภู">หนองบัวลำภู</option>
          <option value="อ่างทอง">อ่างทอง</option>
          <option value="อำนาจเจริญ">อำนาจเจริญ</option>
          <option value="อุดรธานี">อุดรธานี</option>
          <option value="อุตรดิตถ์">อุตรดิตถ์</option>
          <option value="อุทัยธานี">อุทัยธานี</option>
          <option value="อุบลราชธานี">อุบลราชธานี</option>
        </select>
      </div>
      </div>
      <br>
      <div class="form-row">

        <div class="col-md-6 mb-6">
         <label for="validationDefaultUsername">ความดันตัวบน</label>
         <div class="input-group">
           <div class="input-group-prepend">
           </div>
           <input type="number"  name="tb_LowPressure" class="form-control" id="validationDefaultUsername" placeholder="ความดันตัวบน" aria-describedby="inputGroupPrepend2" required>
         </div>
       </div>

       <div class="col-md-6 mb-6">
        <label for="validationDefaultUsername">ความดันตัวล่าง</label>
        <div class="input-group">
          <div class="input-group-prepend">
          </div>
          <input type="number"  name="tb_HighPressure" class="form-control" id="validationDefaultUsername" placeholder="ความดันตัวล่าง" aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>


      </div>
<br>
      <div class="form-row">
        <div class="col-md-6 mb-6">
         <label for="validationDefaultUsername">ป้อนน้ำหนักของคุณ</label>
         <div class="input-group">
           <div class="input-group-prepend">
           </div>
           <input type="text"  name="weight" class="form-control" id="validationDefaultUsername" placeholder="ป้อนน้ำหนักของคุณ" aria-describedby="inputGroupPrepend2" required>
         </div>
       </div>

       <div class="col-md-6 mb-6">
        <label for="validationDefaultUsername">ป้อนส่วนสูงของคุณ</label>
        <div class="input-group">
          <div class="input-group-prepend">
          </div>
          <input type="text"  name="tb_Height" class="form-control" id="validationDefaultUsername" placeholder="ป้อนส่วนสูงของคุณ" aria-describedby="inputGroupPrepend2" required>
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
           <input type="text"  name="bmi" class="form-control" id="validationDefaultUsername" placeholder="ค่า BMi" aria-describedby="inputGroupPrepend2" required>
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
      </div>


    </div>
  </div>
<br>
<div class="form-group">
  <input type="submit"   onclick="computeBMI();" class="btn btn-outline-success col-md-2  " value="บันทึกข้อมูล"
  <div> <a href="{{route('Personnel.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a>
      <input class="btn btn-danger" type="reset" value="ล่างข้อมูล" />
   </div>

      </div>
      </form>
      <br>
      <br><br><br><br>
    </div>
  </div>
</div>

<script type="text/javascript">
      $(document).ready(function(){
        $('.delete_form').on('submit', function() {
          if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
        return true;
      }
        else {
          return false;
      }
      });
      $('#example').DataTable( {
        "language": {
                 "decimal":        "",
                 "emptyTable":     "No data available in table",
                 "info":           "แสดงข้อมูลจาก _START_ รายการถึง _END_ รายการ ( ข้อมูลที่มีทั้งหมด _TOTAL_ รายการ )",
                 "infoEmpty":      "แสดงข้อมูล 0 รายการ ",
                 "infoFiltered":   "(จากรายการข้อมูลที่มีทั้งหมด _MAX_ รายการ)",
                 "infoPostFix":    "",
                 "thousands":      ",",
                 "lengthMenu":     "แสดงข้อมูล _MENU_ รายการ",
                 "loadingRecords": "Loading...",
                 "processing":     "Processing...",
                 "search":         "ค้นหาข้อมูล:",
                 "zeroRecords":    "ไม่พบข้อมูลที่ค้นหา",
                 "paginate": {
                     "first":      "ครั้งแรก",
                     "last":       "สุดท้าย",
                     "next":       "ถัดไป",
                     "previous":   "ก่อน"
                 },
                 "aria": {
                     "sortAscending":  ": activate to sort column ascending",
                     "sortDescending": ": activate to sort column descending"
                 }
               }
             });
  });
 </script>


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
@endsection

@section('scripts')

@endsection
