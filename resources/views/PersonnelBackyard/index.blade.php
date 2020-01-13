

@extends('layouts.masterfrontofhouse')
@section('title','หน้าจัดการข้อมูล Admin')
@section('content')

<!-- <style>
    html,
    .container {

        background:#CCCCCC;
    }

    .AS{
      background:#FDF5E6;
    }
</style> -->

  <div class="container col-md-12">
    <div class="row col-md-12" >
      <div class="col-md-12 ">

    <br>
    <h3 align="center"> ข้อมูลบุคลากรศูนย์สารสนเทศ</h3>
    <th> จำนวนข้อมูลทั้งหมด :  {{$Personnel->total()}} รายการ</th>
    <div align="right" > <a href="{{route('PersonnelBackyard.create')}}" class="fa fa-plus-square " style="font-size:48px;color:green"></a>
    <br><br><br>

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
          <th>รายละเอียดเพิ่มเติม</th>
          <th align="center">แก้ไขข้อมูล</th>
          <th align="center">ลบข้อมูล</th>
        </tr>
      @foreach($Personnel as $row)
        <tr>
          <td align="center">{{$row['tb_Name']}}</td>
          <td align="center">{{$row['tb_LastName']}}</td>

          <td>
            <a class="fas fa-file-alt " style="font-size:30px;color:orange" data-toggle="modal" data-target="#myShowModal{{ $row->id }}"></a>
              @include('PersonnelBackyard.modal')
          </td>

          <td>
              <a href="{{action('PersonnelBackyardController@edit', $row['id'])}}"  onClick="javascript:return confirm('คุณต้องการแก้ไขข้อมูลใช่หรือไม่')"  class="fa fa-edit " style="font-size:30px;color:green"></a>
          </td>

          <td>
            <form method="post" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')" class="delete_form" action="{{action('PersonnelBackyardController@destroy',$row['id'])}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="fa fa-trash " style="font-size:30px;color:green"></button>
            </form>
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

         <script type="text/javascript">
               $(document).ready(function() {
        $('#example').DataTable();
      } );
         </script>
<hr>
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
