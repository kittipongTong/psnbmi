@extends('layouts.masterfrontofhouse')

@section('title')
หน้าแก้ไขข้อมูลสมาชิก
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2>แก้ไขสถานะของผู้ใช่และข้อมูลส่วนตัว</h2>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="" action="/role-register-update/{{ $users->id }}" method="POST" >
                        {{ csrf_field() }}
                        {{ method_field ('PUT') }}

                        <div class="form-group">
                          <label><h6>ชื่อ</h6></label>
                          <input type="text" name="username" value="{{ $users->name}}" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label><h6>เบอร์โทร</h6></label>
                          <input type="text" name="phone" value="{{ $users->phone}}" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label><h6>E-mail</h6></label>
                          <input type="text" name="email" value="{{ $users->email}}" class="form-control" value="">
                        </div>


                        <div class="form-group">
                          <label>เปลี่ยนแปลงสถานะของผู้ใช้งาน</label>
                            <select class="form-control" name="usertype" >
                              <option value="เป็นผู้ดูแลระบบ">เป็นผู้ดูแลระบบ (Admin)</option>
                              <option value="ผู้ใช่งาน">ผู้ใช่งาน</option>
                              <option value="">ยกเลิก</option>
                            </select>
                        </div>
                          <br><br>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <a href="/role-register" class="btn btn-warning">ยกเลิก</a>

                    </form>

                    </div>

                  </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>


@endsection


@section('scripts')

@endsection
