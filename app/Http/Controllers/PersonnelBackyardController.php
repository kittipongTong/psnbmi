<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;

class PersonnelBackyardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $Personnel = Personnel::paginate(5);
     // $Personnel = Personnel::all();
    return view('PersonnelBackyard.index', compact('Personnel'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view('PersonnelBackyard.create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $this->validate($request,
    [
     'tb_Name' => 'required',
     'tb_LastName' => 'required',
     'tb_Aeg' => 'required|numeric',
     'tb_Height' => 'required',
     'weight' => 'required',
     'tb_LowPressure' => 'required',
     'tb_HighPressure' => 'required',
     'tb_Address' => 'required',
     'provinces' => 'required',
     'amphures' => 'required',
     'districts' => 'required',
     'bmi' => 'required',
     'meaning' => 'required',

   ]);

    $Personnel = new Personnel(
      [
        'tb_Name' => $request->get('tb_Name'),
        'tb_LastName' => $request->get('tb_LastName'),
        'tb_Aeg' => $request->get('tb_Aeg'),
        'tb_Height' => $request->get('tb_Height'),
        'weight' => $request->get('weight'),
        'tb_Address' => $request->get('tb_Address'),
        'provinces' => $request->get('provinces'),
        'amphures' => $request->get('amphures'),
        'districts' => $request->get('districts'),
         'tb_LowPressure' => $request->get('tb_LowPressure'),
         'tb_HighPressure' => $request->get('tb_HighPressure'),
         'bmi' => $request->get('bmi'),
         'meaning' => $request->get('meaning'),
      ]
    );

    $Personnel->save();
    return redirect()->route('PersonnelBackyard.index')->with('success','บันทึกข้อมูลเรียบร้อย');

  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $Personnel =  Personnel::find($id);
    return view('PersonnelBackyard.edit', compact('Personnel', 'id'));


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

    $this->validate($request,
    [
      'tb_Name' => 'required',
      'tb_LastName' => 'required',
      'tb_Aeg' => 'required',
      'tb_Height' => 'required',
      'weight' => 'required',
      'tb_Address' => 'required',
      'provinces' => 'required',
      'amphures' => 'required',
      'districts' => 'required',
      'tb_LowPressure' => 'required',
      'tb_HighPressure' => 'required',
      'bmi' => 'required',
      'meaning' => 'required',
   ]);

    $Personnel = Personnel::find($id);

    $Personnel->tb_Name = $request->get('tb_Name');
    $Personnel->tb_LastName = $request->get('tb_LastName');
    $Personnel->tb_Aeg = $request->get('tb_Aeg');
    $Personnel->tb_Height = $request->get('tb_Height');
    $Personnel->weight = $request->get('weight');
    $Personnel->tb_Address = $request->get('tb_Address');
    $Personnel->provinces = $request->get('provinces');
    $Personnel->amphures = $request->get('amphures');
    $Personnel->districts = $request->get('districts');
    $Personnel->tb_LowPressure = $request->get('tb_LowPressure');
    $Personnel->tb_HighPressure = $request->get('tb_HighPressure');
    $Personnel->bmi = $request->get('bmi');
    $Personnel->meaning = $request->get('meaning');

    $Personnel->save();

      // $DeviceTypes = DeviceTypes::find($id)->update($request->all());

    // $DeviceTypes = DeviceTypes::find($id)->update($request->all());

    return redirect()->route('PersonnelBackyard.index')->with('success', 'อัพเดทข้อมูลเรียบร้อย');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $Personnel =  Personnel::find($id)->delete();
      return redirect()->route('PersonnelBackyard.index')->with('success', 'ลบข้อมูลเรียบร้อย');
  }


}
