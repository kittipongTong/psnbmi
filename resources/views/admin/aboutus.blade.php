@extends('layouts.masterfrontofhouse')

@section('title')


@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="/save-aboutus" method="POST">
        {{ csrf_field() }}

      <div class="modal-body">

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
                <input type="text" name="tb_Address" class="form-control" id="inputEmail4">
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

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">วันที่รับบริการ</label>
                <input type="text" name="tb_Date" class="form-control" id="inputEmail4">
              </div>

            </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </div>
        </form>
    </div>
  </div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">About</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>อายุ</th>
                      <th>ส่วนสูง</th>
                      <th>น้ำหนัก</th>
                      <th>ความดันตัวบน</th>
                      <th>ความดันตัวล่าง</th>
                      <th>ค่า BMI</th>
                      <th>วันที่รับบริการ</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>

                        <td>
                          <a href="" class="btn btn-primary">แก้ไข</a>
                        </td>

                        <td>
                          <form class="" action="" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-success">ลบ</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>



@endsection

@section('scripts')

@endsection
