@extends('layouts.masterfrontofhouse')

@section('title')
หน้าจักการข้อมูลสมาชิก
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">หน้าจัดการข้อมูลสมาชิก</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table align="center" class="table table-bordered">
                    <thead  align="center"class="thead-dark">
                      <th>ชื่อ</th>
                      <!-- <th>นามสกุล</th> -->
                      <th>เบอร์โทร</th>
                      <th>อีเมล</th>
                      <th>กำหนดสิทธิ์</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </thead>
                    <tbody >
                        @foreach ($users as $row)
                      <tr>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->phone }}</td>

                        <td>{{ $row->email }}</td>
                        <td>- {{ $row->usertype }}</td>
                        <td align="center">
                          <!-- <i class="fa fa-align-justify" style="font-size:48px;color:red"></i> -->
                          <a  href="/role-edit/{{ $row->id}}" class="btn btn-primary">แก้ไขข้อมูล</a>
                          <!-- <i class="material-icons" style="font-size:20px;color:red">แก้ไข</i> -->
                        </td>
                        <td>
                          <form align="center" class="" action="/role-delete/{{ $row->id }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-success">ลบข้อมูล</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
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
