@extends('layouts.masterfrontofhouse')

@section('title')


@endsection

@section('content')
<div class="row">
          <div  class="col-md-12">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title">จัดการข้อมูลบุคลากรศูนย์สารสนเทศ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <form class="col-md-5">
                      <div class="form-group">
                        <label for="exampleInputPassword1">ชื่อ</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อ">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">นามสกุล</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="นามสกุล">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">อายุ</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="อายุ">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">ส่วนสูง</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ส่วนสูง">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">น้ำหนัก</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="น้ำหนัก">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">ที่อยู่</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ที่อยู่">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">ความดันตัวบน</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ความดันตัวบน">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">ความดันตัวล่าง</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ความดันตัวล่าง">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">ค่า BMI </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ค่า BMI">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">วันที่รับบริการ </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="วันที่รับบริการ">
                      </div>

                      <button type="button" class="btn btn-success">เพิ่มข้อมูล</button>
                      <button type="button" class="btn btn-warning">แก้ไขข้อมูล</button>
                      <button type="submit" class="btn btn-primary">ลบข้อมูล</button>
                    </form>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>



@endsection

@section('scripts')

@endsection
