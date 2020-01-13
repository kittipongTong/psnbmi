@section('title','หน้าแก้ไขข้อมูล')
@extends('layouts.index')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <br><br>

      <h3 align="center"> แก้ไข</h3>

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

    <form method="post" action="{{action('PersonnelbmiController@update', $id)}}">
    {{csrf_field()}}


    <div class="form-group">
         <label>ชื่อ</label>
         <input type="text" name="tb_Name" class="form-control"  placeholder="รหัสประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Name}}" />
    </div>

    <div class="form-group">
         <label>นามสกุล</label>
         <input type="text" name="tb_LastName" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_LastName}}" />
    </div>

    <div class="form-group">
         <label>อายุ</label>
         <input type="text" name="tb_Aeg" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Aeg}}"/>
    </div>

    <div class="form-group">
         <label>ส่วนสูง</label>
         <input type="text" name="tb_Height" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Height}}"/>
    </div>

    <div class="form-group">
         <label>น้ำหนัก</label>
         <input type="text" name="tb_Weight" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Weight}}"/>
    </div>

    <div class="form-group">
         <label>ที่อยู่</label>
         <input type="text" name="tb_Address" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Address}}"/>
    </div>

    <div class="form-group">
         <label>ความดันตัวล่าง</label>
         <input type="text" name="tb_LowPressure" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_LowPressure}}"/>
    </div>

    <div class="form-group">
         <label>ความดันตัวบน</label>
         <input type="text" name="tb_HighPressure" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_HighPressure}}"/>
    </div>

    <div class="form-group">
         <label>วันที่รับบริการ</label>
         <input type="text" name="tb_BMI" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_BMI}}"/>
    </div>

    <div class="form-group">
         <label>วันที่รับบริการ</label>
         <input type="text" name="tb_Date" class="form-control"  placeholder="ชื่อประเภทอุปกรณ์" value="{{$Personnelbmi->tb_Date}}"/>
    </div>



  <div class="form-group">
    <input type="submit" class="btn btn-outline-success col-md-2  " value="แก้ไขข้อมูล"
    <div > <a href="{{route('Personnelbmi.index')}}" class="btn btn-outline-info col-md-3">กลับหน้าแสดงข้อมูล</a> </div>
      </div>
        <input type="hidden" name="_method" value="PATCH"/>
      </form>
      </div>
      </div>
     </div>

@endsection
