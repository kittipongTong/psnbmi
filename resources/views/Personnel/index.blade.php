
@extends('layouts.master')
@section('title','หน้า จัดการข้อมูล')
@section('content')

<style>
    html,
    .ci {
				color: Black;
				font-size: 20px;

    }
    .ci1{
      color: Black;
      font-size: 20px;
    }
		/* ปรับสีตัวหนังสือ css */
    </style>


  <div class="container col-md-12">
    <div class="row col-md-12" >
      <div class="col-md-12 ">

    <br><br>
    <h3 align="center" class="ci"> ข้อมูลบุคลากรศูนย์สารสนเทศ</h3>
    <th class="ci1"> จำนวนข้อมูลทั้งหมด :  {{$Personnel->total()}} รายการ</th>
    <div align="right" > <a href="{{route('Personnel.create')}}" data-toggle="tooltip" title="ปุ่มเพิ่มข้อมูล" class="fa fa-plus-square " style="font-size:48px;color:green"></a>
    <br><br>

      @if(count($errors)> 0)
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

      <table id="example" align="center" class="table table-bordered">
      <thead align="center" class="table table-bordered thead-dark">
        <tr>
          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th data-toggle="tooltip" title="สมาชิกสามารถดูข้อมูลที่ปุ่มรายละเอียดเพิ่มเติมได้">รายละเอียดเพิ่มเติม</th>
        </tr>
      @foreach($Personnel as $row)
        <tr>
          <td align="center">{{$row['tb_Name']}}</td>
          <td align="center">{{$row['tb_LastName']}}</td>
          <td>
            <a class="fas fa-file-alt "   style="font-size:30px;color:orange" data-toggle="modal" data-target="#myShowModal{{ $row->id }}"></a>
              @include('Personnel.modal')
          </td>
        </tr>
        @endforeach
        </table>
      {{$Personnel->links()}}
    </div>
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


@stop
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
