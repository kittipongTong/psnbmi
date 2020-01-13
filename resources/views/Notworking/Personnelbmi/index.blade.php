@extends('layouts.masterfrontofhouse')
@section('title','หน้า จัดการข้อมูล')
@section('content')
<style>
    html,
    .container {
        /* color: #000000; */
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


<div class="AS">
  <div class="container col-md-12">
    <div class="row col-md-12" >
      <div class="col-md-12 ">

        <br>
        <h3 align="center"> ข้อมูลบุคลากรศูนย์สารสนเทศ</h3>
        <th> จำนวนข้อมูลทั้งหมด :  {{$Personnelbmi->total()}} รายการ</th>
        <div align="right" > <a href="{{route('Personnelbmi.create')}}" class="btn btn-outline-success col-md-2">+ เพิ่มข้อมูล</a>
        <br><br><br>

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


        <table id="example" align="center" class="table" >
          <thead align="center" class="table table-bordered thead-dark" >
        <tr>


          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th>รายละเอียดเพิ่มเติม</th>

          <th align="center">แก้ไขข้อมูล</th>
          <th align="center">ลบข้อมูล</th>
        </tr>

        @foreach($Personnelbmi as $row)

        <tr>
          <td align="center">{{$row['tb_Name']}}</td>
          <td align="center">{{$row['tb_LastName']}}</td>

          <td>
            <a class="btn btn-primary col-md-8" data-toggle="modal" data-target="#myShowModal{{ $row->id }}">รายละเอียดข้อมูล</a>
              @include('Personnelbmi.modal')
          </td>

          <td>
              <a href="{{action('PersonnelbmiController@edit', $row['id'])}}" class="btn btn-warning col-md-12">แก้ไขข้อมูล</a>
          </td>

          <td>
            <form method="post" class="delete_form" action="{{action('PersonnelbmiController@destroy',$row['id'])}}">
              {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" class="btn btn-danger col-md-12">ลบข้อมูล</button>
            </form>
          </td>
        </tr>
        @endforeach
        </table>

        {{$Personnelbmi->links()}}
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


          });
        </script>

</div>
@endsection
@php
    function DateThai($strDate)
    {
      if($strDate != null){
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear เวลา $strHour:$strMinute น.";
      }
    }
@endphp
