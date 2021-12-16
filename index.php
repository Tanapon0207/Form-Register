<!DOCTYPE html>
<html>

<head>
    <title>แบบฟอร์ม</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>




<body>


    <form action="#" >
    <div class="container" style="margin-top: 20px;background-color: #E6E6FA; border: black;">
       
        
        <h1 style="text-align: center;">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
        <br />
        


        
        <div class="form-group">
        <label for="idcard">รหัสบัตรประจำตัวประชน:</label>
        <div class="col-sm-3" required>
            <input type="text" id="idcard" required class="form-control" placeholder="">
        </div>
    <br />
      




        <!--ส่วนของการเลือกคำนำหน้า-->
        
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">คำนำหน้า</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>
            </div>




            <!--ส่วนของการเลือกเพศ-->
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect02">เพศ</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">ชาย</option>
                        <option value="2">หญิง</option>
                        <option value="3">ไม่ระบุ</option>
                    </select>
                </div>
            </div>




            <!--input ชื่อ-นามสกุล-->
            <div class="col-sm-2 control-label">
                ชื่อ :
            </div>
            <div class="col-sm-3" required>
                <input type="text" id="name" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                นามสกุล :
            </div>
            <div class="col-sm-3" required>
                <input type="text" id="lastname" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
            </div>
        </div>




        <!--ส่วนการเลือก ศาสนา-->
        <div class="col-sm-2 control-label">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect03">ศาสนา</label>
                </div>
                <select class="custom-select" id="inputGroupSelect03" required>
                    <option selected>-เลือกข้อมูล-</option>
                    <option value="1">พุทธ</option>
                    <option value="2">คริสต์ </option>
                    <option value="3">อิสลาม </option>
                    <option value="4">พราหมณ์ฮินดู</option>
                </select>
            </div>
        </div>


        <!--กรอกข้อมูลที่่อยู่-->
        <div class="col-sm-2 control-label">
            บ้านเลขที่:
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="numberhome" required class="form-control" placeholder="123/45" width="50px">
        </div>

        <div class="col-sm-2 control-label">
            หมู่ที่:
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="หมู่ที่" required class="form-control" placeholder="เช่น หมู่ที่ 3">
        </div>

        <div class="col-sm-2 control-label">
            ถนน :
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="
            ถนน" required class="form-control" placeholder="เช่น ถ.ราชดำเนิน">
        </div>

        <div class="col-sm-2 control-label">
            ตำบล/แขวง:
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="ตำบล" required class="form-control" placeholder="เช่น ต.ในเมือง">
        </div>

        <div class="col-sm-2 control-label">
            อำเภอ/เขต:
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="อำเภอ" required class="form-control" placeholder="เช่น อ.เมือง">
        </div>
        <br />





        <!--เลือกจังหวัด-->
        <div class="col-sm-2 control-label">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect04">จังหวัด</label>
                </div>
                <select class="custom-select" id="inputGroupSelect04" required>
                    <option selected>-เลือกข้อมูล-</option>
                    <option value="1">นครศรีธรรมราช</option>
                    <option value="2"> ตรัง </option>
                    <option value="3">พัทลุง</option>
                    <option value="4"> พังงา</option>
                    <option value="5"> ภูเก็ต</option>

                </select>
            </div>
        </div>











        <!--ข้อมูล รหัสไปรษณีย์ โทรศัพท์บ้าน โทรศัพท์มือถือ -->
        <div class="col-sm-2 control-label">
            รหัสไปรษณีย์:
        </div>
        <div class="col-sm-3" required>
            <input type="text" id="ไปรษณีย์" required class="form-control" placeholder="18203">
        </div>

        <div class="col-sm-2 control-label">
            โทรศัพท์บ้าน:
        </div>
        <div class="col-sm-3" required>
            <input type="tel" id="telhome" required class="form-control" placeholder="0256498731">
        </div>

        <div class="col-sm-2 control-label" required>
            โทรศัพท์มือถือ:
        </div>
        <div class="col-sm-3" required>
            <input type="tel"  pattern="[0-9]*" inputmode="numeric" id="telme" required class="form-control" placeholder="0623254987" >
        </div>

        <script>
            $(document).ready(function ($){
                $('#telme').mask("000 000 0000",{placeholder="062 235 0325"});
            }
        </script>



        <br />




        <!--ส่วนสาขาที่สนใจ-->
        <div class="col-sm-2 control-label" required>
            สาขาที่สนใจ :
        </div>
            <label class="checkbox  ">
                <input type="checkbox"  id="itd" value=""> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)
            </label><br />
            <label class="checkbox">
                <input type="checkbox"    id="imi"   value=""> IMI (นวัตกรรมสารสนเทศทางการแพทย์)
            </label><br />
            <label class="checkbox">
                <input type="checkbox"   id="mta"    value=""> MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม)
            </label><br />
            <label class="checkbox">
                <input type="checkbox"  id="dcm"    value=""> DCM (ดิจิทัลคอนเทนต์และสื่อ)
            </label><br />
            <label class="checkbox">
                <input type="checkbox"   id="comm"   value=""> COMM (นิเทศศาสตร์)
            </label><br />
        </div>










        <!--ปุ่ม ตกลง-->
     
        <div class="col-sm-3">
            <button type="submit"  id ="ปุ่มกด"class="btn btn-primary" > ตกลง </button>

        </div>
    </div>
    




    </form>



    <script>
        function btnsubmit_click(){
            var idcard = $("#บัตรประชาชน").val();
   

            var data ="{";
                data +='"idcard":"'+$("#บัตรประชาชน").val() + '",';
            data += "}";

            console.log(JSON.parse(data));
        }


        $(()=>{
            $("#ปุ่มกด").click(btnsubmit_click);
        });
    </script>

</body>

</html>







