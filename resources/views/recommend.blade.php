@extends('include.inc-footer')


@extends('layouts.master')

@section('title')


@endsection
<!-- หน้าแนะนำสำหรับผู้ใช้งาน -->
@section('content')
<style>

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
<body>

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table align= "center" class="table">
                    <h1 align= "center">ยินดีต้อนรับสมาชิกทุกท่าน</h1>
                      <hr> <h1>ข้อแนะนำสำหรับผู้ใช้งาน</h1>
                      <hr>
                      <p>

                        <p style="text-indent: 2.5em;">  BMI (ค่าดัชนีมวลกาย) คืออะไร</p>
                        <p>
                        ดัชนีมวลกาย หรือ BMI มาจากคำเต็มว่า Body Mass Index เป็นค่าสากลที่ใช้เพื่อคำนวณเพื่อหาน้ำหนักตัวที่ควรจะเป็น และประมาณระดับไขมันในร่างกายโดยใช้น้ำหนักและส่วนสูง การคำนวณดัชนีมวลกายไม่ใช่การวัดโดยตรงแต่ก็เป็นตัวชี้วัดไขมันในร่างกายที่ค่อนข้างเชื่อถือได้สำหรับคนส่วนใหญ่
                        </p>
                        <p>
                        ค่า BMI สามารถใช้บ่งบอกความเสี่ยงในการเกิดโรคเบาหวาน ความดันโลหิตสูง ไขมันในเลือด ระบบหัวใจ รวมไปถึงมะเร็งบางชนิด ในปัจจุบันการวัดค่า BMI โดยรวมของประชาชนในประเทศเป็นตัวบ่งบอกสุขภาพทางโภชนาการที่ประชาชนได้รับตั้งแต่เด็กจนถึงโต
                        </p>
                        <p>
                        อย่างไรก็ตาม ค่า BMI ไม่สามารถบอกน้ำหนักตัวตามเกณฑ์หรือปริมาณไขมันหรือได้อย่างแม่นยำ เนื่องจากคุณจำเป็นต้องนำปัจจัยอื่นๆ มาประกอบด้วย ทั้งเรื่องของพันธุกรรม พฤติกรรมการกิน การใช้ชีวิต การออกกำลังกาย และอื่นๆ แต่งานวิจัยพบว่าการหาดัชนีมวลกายนี้มีความสัมพันธ์อย่างมากกับวิธีการวัดปริมาณไขมันในร่างกายโดยตรงวิธีอื่นที่ซับซ้อนกว่า เช่น การหาน้ำหนักใต้น้ำ (underwater weighing) เนื่องจากดัชนีมวลกายมีวิธีคำนวณที่ง่าย ทำให้ใครๆ ก็สามารถประเมินความเสี่ยงจากการมีปริมาณไขมันในร่างกายเกินได้
                        ข้อจำกัดของการใช้ดัชนีมวลกายในการวัดปริมาณไขมันในร่างกาย
                        </p>
                        <p>
                        แม้ว่าดัชนีมวลกายจะสัมพันธ์กับการวัดไขมันในร่างกายค่อนข้างมาก แต่ก็มีข้อจำกัดอยู่บ้าง โดยขึ้นอยู่กับเพศ อายุ และความสามารถทางกีฬา ข้อจำกัดเหล่านี้ได้แก่
                        </p>
                        <p>
                        ผู้หญิงมีแนวโน้มที่จะมีปริมาณไขมันในร่างกายมากกว่าผู้ชาย
                        คนที่อายุมากกว่ามีแนวโน้มที่จะมีปริมาณไขมันในร่างกายมากกว่าคนที่อายุน้อยกว่า
                        นักกีฬาที่ฝึกฝนมาอย่างดีจะมีดัชนีมวลกายสูงเนื่องจากมีมวลกล้ามเนื้อมากกว่า ทำให้น้ำหนักตัวที่มากนั้นมาจากมวลกล้ามเนื้อ ไม่ใช่ไขมัน องค์ประกอบของร่างกาย ไขมันในร่างกาย และดัชนีมวลกาย
                        นักกีฬาที่มีมวลกล้ามเนื้อมากจำเป็นจะต้องปรับวิธีการคำนวณดัชนีมวลกาย เพราะว่าค่าดัชนีมวลกายไม่สามารถแยกแยะสัดส่วนองค์ประกอบต่างๆ ของร่างกายที่รวมกันเป็นน้ำหนักตัวทั้งหมดได้ ดังนั้นนักกีฬาจึงใช้วิธีการวัดองค์ประกอบของร่างกายและปริมาณไขมันในร่างกายโดยตรงจะแม่นยำกว่า
                        ความเสี่ยงของสุขภาพจากการมีดัชนีมวลกายสูง
                        เหตุผลที่ใช้ดัชนีมวลกายในการคัดกรองสุขภาพของประชากรทั่วไปเนื่องจากการมีน้ำหนักเกินหรืออ้วนนั้นมีความสัมพันธ์อย่างมากกับปัญหาสุขภาพ การเกิดโรคเรื้อรัง และการเสียชีวิตก่อนวัยอันควร ผู้ที่มีน้ำหนักเกินหรืออ้วนจะเสี่ยงต่อการเกิดปัญหาสุขภาพต่อไปนี้เพิ่มขึ้น
                        </p>
                        <p>
                        ความดันโลหิตสูง
                        เบาหวานชนิดที่ 2
                        โรคหลอดเลือดหัวใจตีบหรือตัน
                        โรคหลอดเลือดสมอง
                        ข้อเสื่อม
                        มะเร็งบางชนิด
                        หยุดหายใจขณะหลับหรือมีปัญหาทางเดินหายใจ
                        </p>
                      </p>
                      <div class="">
                            <!-- <img align="lrft" src="../feliciano/images/201307-10-120549_4M-0.jpg" alt=""> -->
                      </div>

                      <p>
                        <p>อ้วนมาก (30.0 ขึ้นไป)
                        ค่อนข้างอันตราย เพราะเข้าเกณฑ์อ้วนมาก เสี่ยงต่อการเกิดโรคร้ายแรงที่แฝงมากับความอ้วน หากค่า BMI อยู่ในระดับนี้ จะต้องระวังการรับประทานไขมัน และควรออกกำลังกายอย่างสม่ำเสมอ และหากเลขยิ่งสูงกว่า 40.0 ยิ่งแสดงถึงความอ้วนที่มากขึ้น
                      </p>
                      <p>
                        อ้วน (25.0 - 29.9)
                        คุณอ้วนในระดับหนึ่ง ถึงแม้จะไม่ถึงเกณฑ์ที่ถือว่าอ้วนมาก ๆ แต่ก็ยังมีความเสี่ยงต่อการเกิดโรคที่มากับความอ้วนได้เช่นกัน ทั้งโรคเบาหวาน และความดันโลหิตสูง
                      </p>
                      <p>
                        น้ำหนักเกิน (23.0 - 24.9)
                        พยายามอีกนิดเพื่อลดน้ำหนักให้เข้าสู่ค่ามาตรฐาน เพราะค่า BMI ในช่วงนี้ยังถือว่าเป็นกลุ่มผู้ที่มีความอ้วนอยู่บ้าง แม้จะไม่ถือว่าอ้วน แต่หากประวัติคนในครอบครัวเคยเป็นโรคเบาหวานและความดันโลหิตสูง ก็ถือว่ายังมีความเสี่ยงมากกว่าคนปกติ
                        </p>
                        <p>
                        น้ำหนักปกติ เหมาะสม (18.6 - 22.9)
                        น้ำหนักที่เหมาะสมสำหรับคนไทยคือค่า BMI ระหว่าง 18.5-22.9 จัดอยู่ในเกณฑ์ปกติ ห่างไกลโรคที่เกิดจากความอ้วน และมีความเสี่ยงต่อการเกิดโรคต่าง ๆ น้อยที่สุด ควรพยายามรักษาระดับค่า BMI ให้อยู่ในระดับนี้ให้นานที่สุด
                        </p>
                        <p>
                        ผอมเกินไป (น้อยกว่า 18.5)
                        น้ำหนักน้อยกว่าปกติก็ไม่ค่อยดี หากคุณสูงมากแต่น้ำหนักน้อยเกินไป อาจเสี่ยงต่อการได้รับสารอาหารไม่เพียงพอหรือได้รับพลังงานไม่เพียงพอ ส่งผลให้ร่างกายอ่อนเพลียง่าย การรับประทานอาหารให้เพียงพอและออกกำลังกายแบบเวทเทรนนิ่งเพื่อเสริมสร้างกล้ามเนื้อ สามารถช่วยเพิ่มค่า BMI ให้อยู่ในเกณฑ์ปกติได้
                        </p>

                      </p>
                      <a  target="_blank" href="https://www.honestdocs.co/bmi-body-mass-index-calculator">ข้อมูลจาก honest docs</a>
                      <hr>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="50"></div>
                        </div>
                        <div class="md-12">
                          <div class="card md-12">
                            <div class="card-header">
                              <div class="">
                                <h1></h1>
                                  <h1><img  align="center" src="../feliciano/images/201307-10-120549_4M-0.jpg" alt=""></h1>
                                    <br>
                                    <h1><img  align="center " src="../feliciano/images/72a1dd52282b.jpg" width="400"  height="400" alt=""></h1>
                              </div>

                            </div>

                          </div>
                          </div>
    <hr>

@endsection

@section('scripts')

@endsection
