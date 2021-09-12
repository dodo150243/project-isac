<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- CSS -->
    <style>
        /* font/header/footer  */
        @import 'https://fonts.googleapis.com/css?family=Kanit';

        body {
            font-family: 'Kanit', sans-serif;
        }
        .navbar-brand {
            color: #FFFFFF;
            font-size: 30px;
            font-weight: bold;
            decoration: none;
        }

        .navbar-brand:hover {
            color: #FFFFFF;

        }

        a.nav-link {
            color: #FFFFFF;
            decoration: none;
        }

        .nav-link:hover {
            color: #FFFFFF;
            background-color: #1E90FF;
        }

        .nav-link:visited {
            color: #FFFFFF;
        }

        #bg-drak {
            box-shadow: 0px 5px 5px rgb(0 0 0 / 35%);
        }

        #text0 {
            font-family: 'Roboto Bold', 'Roboto Regular', 'Roboto', sans-serif;
            padding-left: 20px;
        }

        #u0_div {

            margin-bottom: 10px;
            margin-top: 50px;
            width: 668px;
            background: inherit;
            background-color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgb(0 0 0 / 35%);
        }

        #container {
            background-color: lightgray;
            width: 100%;
            height: 1350px;
        }

        #u1_text {
            font-family: 'Roboto Bold', 'Roboto Regular', 'Roboto', sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 24px;
            letter-spacing: 0.4px;
            text-align: center;
            padding-top: 20px;
        }

        #u13_div {
            width: 192px;
            height: 739px;
            background-color: rgba(145, 0, 18, 0.6431372549019608);
        }

        .form-row {
            display: flex;
            padding-left: 20px;
            padding-bottom: 7px;
        }


       

        #div {


            height: 192px;
            background-color: rgba(170, 170, 170, 0.9921568627450981);

        }

        #u14 {
            width: 178px;
            height: 192px;
            padding: 7px;
        }

        #u14_div {
            position: absolute;
            width: 178px;
            height: 192px;
            background: inherit;
            background-color: rgba(170, 170, 170, 0.9921568627450981);

        }

        #u18 {
            position: absolute;
            top: 392px;
            padding-left: 7px;
        }

        #u18_div {
            width: 178px;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.9921568627450981);

        }

        #u16_div {
            width: 178px;
            height: 30px;
            padding: 2px 24px;
            text-align: center;
            background-color: rgba(145, 0, 18, 0.6431372549019608);
        }

        #text {
            text-decoration: none;
            color: #FFFFFF;
        }

        #u26_div {
            position: absolute;
            width: 410px;
            height: 37px;
            background-color: rgba(159, 32, 48, 0.9);
           

        }

        #u27_text {
            font-weight: 600;
            font-style: normal;
            color: #FFFFFF;
            letter-spacing: 0.6px;
            padding: 7px;
            font-size: 16px;
        }
        .u12_div {
            width: 130px;
            height: 39px;
            background-color: rgba(230, 115, 198, 0.6274509803921569);
            border-color: rgba(255, 255, 255, 1);
            font-weight: 600;
            font-style: normal;
            font-size: 16px;
            color: #555555;
            text-align: left;
            padding: 7px;
            margin-bottom: 3px;
            padding-left: 8px;
        }
        .u13_div {
            width: 280px;
            height: 39px;
            background-color: rgba(230, 115, 198, 0.34509803921568627);
            border-color: rgba(255, 255, 255, 1);
            font-weight: 600;
            font-style: normal;
            font-size: 16px;
            color: #555555;
            text-align: left;
            padding: 7px;
            margin-bottom: 3px;
            padding-left: 8px;
        }

        #data {
            display: flex;
            background-color: rgba(230, 115, 198, 0.34509803921568627);
        }
    </style>

</head>

<body>

    <div id="container">
        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark" id="bg-drak">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="#">ISAC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ค้นหาข้อมูลศิษย์เก่า
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">จากชื่อ</a></li>
                                <li><a class="dropdown-item" href="#">จากปีแรกเข้า</a></li>
                                <li><a class="dropdown-item" href="#">จากจังหวัด</a></li>
                                <li><a class="dropdown-item" href="#">จากหมู่เรียน</a></li>
                                <li><a class="dropdown-item" href="#">จากรหัสนักศึกษา</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ข้อมูลส่วนตัว</a>
                        </li>

                    </ul>
                    <a class="nav-link" href="#">USER</a>
                </div>
            </div>
        </nav>




        <div id="u0_div" class="container">

            <form action="">
                <div id="u1_text">
                    <p><span>ประวัติส่วนตัว</span></p>
                </div>

                <div class="form-row">
                    <div class="form-group" style="padding-bottom: 20px; padding-right:4px">
                        <div id="u13_div" class="">
                            <div id="u14" class="ax_default box_3">
                                <div id="u14_div" class=""></div>
                                <div id="u14_text" class="text " style="display:none; visibility: hidden">
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div id="u18" class="ax_default box_3">
                            <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">
                                <a href="" id="text">
                                    <div id="u16_div">
                                        <p><span>แก้ไขข้อมูลนักศึกษา</span></p>
                                    </div>
                                </a>

                            </div>
                            <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">
                                <a href="" id="text">
                                    <div id="u16_div">
                                        <p><span>เปลี่ยนรหัสผ่าน</span></p>
                                    </div>
                                </a>
                            </div>
                            <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">
                                <a href="" id="text">
                                    <div id="u16_div">
                                        <p><span>พิมพ์ข้มูลนักศึกษา</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    
                    
                    <div class="form-group" style="padding-bottom: 20px;">
                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลด้านการนักศีกษา</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u12_div">
                            <p><span>รหัสประจำตัว</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เลขบัตรประชาชน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่อ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่ออังกฤษ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>คณะ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สาขาวิชา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>หมู่เรียน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ระดับการศึกษา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ปีที่เข้าศึกษา</span></p>
                        </div>

                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลส่วนบุคคล</span></p>
                            </div>
                        </div>

                        <div id="u12-1_div" class="u12_div" style="margin-top:38px;">
                            <p><span>วันเดือนปีเกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัดที่เกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สัญชาติ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ศาสนา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>กลุ่มเลือด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ที่อยู่</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เบอร์โทรติดต่อ</span></p>
                        </div>
                        

                    </div>



                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u13_div">
                            <p><span>รหัสประจำตัว</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>เลขบัตรประชาชน</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ชื่อ</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ชื่ออังกฤษ</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>คณะ</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>สาขาวิชา</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>หมู่เรียน</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ระดับการศึกษา</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ปีที่เข้าศึกษา</span></p>
                        </div>

                       

                        <div id="u12-1_div" class="u13_div" style="margin-top:38px;">
                            <p><span>วันเดือนปีเกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>จังหวัดที่เกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>สัญชาติ</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ศาสนา</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>กลุ่มเลือด</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>ที่อยู่</span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span>เบอร์โทรติดต่อ</span></p>
                        </div>
                        

                    </div>

                   
                       
                   
                    







                </div>



            </form>

        </div>

    </div>

</body>

</html>