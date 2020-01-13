<!-- Show Modal -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div  id="myShowModal{{$row->id }}" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Header -->
    <div class="modal-header" align="center" >
      <h4 class="modal-title" ><b  align="center">ข้อมูลบุคลากรศูนย์สารสนเทศ</b></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- end Header -->

    <!-- Content -->
    <div class="modal-body">
      <div class="box-body">

        <div class="row form-group" align="left">
          <div class="col">
            <label>ชื่อ :</label>
            <input type="text" class="form-control" value="{{ $row->tb_Name }}" disabled>
          </div>
          <div class="col">
            <label>นามสกุล :</label>
            <input type="text" class="form-control" value="{{ $row->tb_LastName }}" disabled>
          </div>

        </div>



        <div class="row form-group" align="left">
          <div class="col">
            <label>อายุ :</label>
            <input type="text" class="form-control" value="{{ $row->tb_Aeg }}" readonly>
          </div>
          <div class="col">
            <label>ส่วนสูง :</label>
            <input type="text" class="form-control" value="{{ $row->tb_Height}}" readonly>
          </div>
          <div class="col">
            <label>น้ำหนัง :</label>
            <input type="text" class="form-control" value="{{ $row->tb_Weight}}" readonly>
          </div>
        </div>

        <div class="row form-group" align="left">
          <div class="col">
            <label>ที่อยู่ :</label>
            <input type="text" class="form-control" value="{{ $row->tb_Address }}" readonly>
          </div>

        </div>

        <div class="row form-group" align="left">
          <div class="col">
            <label>ความดันตัวบน :</label>
            <input type="text" class="form-control" value="{{$row->tb_LowPressure}}" readonly>
          </div>
          <div class="col">
            <label>ความดันตัวล่าง :</label>
            <input type="text" class="form-control" value="{{$row->tb_HighPressure}}" readonly>
          </div>
          <div class="col">
            <label>ค่า BMI :</label>
            <input type="text" class="form-control" value="{{$row->tb_BMI}}" readonly>
          </div>
        </div>

        <div class="row form-group" align="left">
          <div class="col">
            <label>บันทึกข้อมูลเมื่อ  :</label>
            <input type="text" class="form-control" value="{{ DateThai($row->created_at) }}" readonly>
          </div>
          <div class="col">
            <label>แก้ไขครั้งล่าสุด :</label>
            <input type="text" class="form-control" value="{{ DateThai($row->updated_at) }}" readonly>
          </div>

        </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        </div>
    </div>
  </div>
  <!-- end Content -->

</div>
</div>
<!-- end Show Modal -->
