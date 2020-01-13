@extends('layouts.masterfrontofhouse')
@section('title','หน้าเพิ่มข้อมูล')
@section('content')

<div class="container">
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

          <form method="post" action="{{url('Personnelbmi')}}">
          {{ csrf_field() }}



              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ชื่อ</label>
                  <input type="text" name="tb_Name" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">นามสกุล</label>
                  <input type="text" name="tb_LastName" class="form-control" id="inputPassword4">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">อายุ</label>
                  <input type="text" name="tb_Aeg" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">ส่วนสูง</label>
                  <input type="text" name="tb_Height" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">น้ำหนัก</label>
                  <input type="text" name="tb_Weight" class="form-control" id="inputPassword4">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">ที่อยู่</label>
                  <textarea class="form-control"  name="tb_Address" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">ความดันตัวบน</label>
                  <input type="text" name="tb_LowPressure" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">ความดันตัวล่าง</label>
                  <input type="text" name="tb_HighPressure" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">ค่า BMI</label>
                  <input type="text" name="tb_BMI" class="form-control" id="inputPassword4">
                </div>
              </div>


          <br>
        <div class="form-group">
          <input type="submit" class="btn btn-outline-success col-md-2  " value="บันทึกข้อมูล"
          <div > <a href="{{route('Personnelbmi.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a> </div>

        </div>

    <br>


   </div>
      </div>
         </div>



@endsection
