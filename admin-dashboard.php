<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOBS3</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

</head>

<style>
    p {
        margin-bottom: 0;
    }

    a {
        color: #000000;
        text-decoration: none !important;
    }

    section {
        margin-bottom: 20px;
    }

    .card {
        width: 100%;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.2);

        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card>.card-header {
        margin-bottom: 10px;

        strong {
            font-size: large;
        }
    }

    .card>.card-body {
        margin-bottom: 10px;
    }

    .card>.card-footer {
        margin-top: auto;
        display: flex;
        justify-content: center;

        a {
            color: #0d6efd;
            display: flex;
            align-items: center;
            gap: 5px;
        }
    }

    .row-eq-height {
        display: flex;
        flex-wrap: wrap;
    }

    .row-eq-height>[class*='col-'] {
        display: flex;
    }

    .five-col {
        margin-inline: -20px !important;
    }

    .custom-row-gap>[class*="col-"] {
        padding-inline: 5px;
    }

    .custom-row-gap {
        margin-inline: -5px;
    }

    .summary {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .summary>.summary-header {
        align-items: center;

        >div {
            padding-block: 10px;
            padding-inline: 5px;
            border-radius: 25%;
        }
    }

    .summary>.summary-body {
        display: flex;
        flex-direction: column;
        gap: 5px;

        strong {
            font-size: xx-large;
        }
    }



    .table-no-border>thead>tr>th,
    .table-no-border>tbody>tr>th,
    .table-no-border>tfoot>tr>th,
    .table-no-border>thead>tr>td,
    .table-no-border>tbody>tr>td,
    .table-no-border>tfoot>tr>td {
        border: none;
        height: 10px;
    }

    @media (max-width: 767px) {
        .row-eq-height {
            display: block;
        }
    }

    @media (max-width: 1439px) {
        .row>[class*="col-"] {
            margin-bottom: 15px;
        }
    }

    @media (min-width: 1440px) {
        .five-col>[class*="col-lg-2"] {
            width: 20%;
        }
    }

    .section3 {
        .summary {
            gap: 10px !important;
        }
    }
</style>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>





    <div class="main-content">

        <div class="container-fluid">
            <!-- SECTION 1 -->
            <section>
                <div class="row row-eq-height">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div style="margin-top: auto; width: 100%;">
                            <span>ช่วงเวลา</span>
                            <div class="input-group">
                                <input type="text" id="dateRange" class="form-control" style="border-right: none;" />
                                <span class="input-group-addon" style="background:#fff;">
                                    <i class="fa-regular fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card" style="border: rgb(160, 126, 255) 2px solid; padding: 10px !important;">
                            <strong class="card-header">Department</strong>
                            <div class="card-body">
                                <select name="" id="" class="form-control">
                                    <option value="#" selected>ทั้งหมด</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card" style="border: rgb(160, 126, 255) 2px solid; padding: 10px !important;">
                            <strong class="card-header">Team</strong>
                            <div class="card-body">
                                <select name="" id="" class="form-control">
                                    <option value="#" selected>ทั้งหมด</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card" style="border: rgb(160, 126, 255) 2px solid; padding: 10px !important;">
                            <strong class="card-header">Line</strong>
                            <div class="card-body">
                                <select name="" id="" class="form-control">
                                    <option value="#" selected>ทั้งหมด</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card" style="border: rgb(160, 126, 255) 2px solid; padding: 10px !important;">
                            <strong class="card-header">Section</strong>
                            <div class="card-body">
                                <select name="" id="" class="form-control">
                                    <option value="#" selected>ทั้งหมด</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div style="width: 100%; display:flex; justify-content: end; align-items: end;">
                            <button type="button" class="btn btn-default"
                                style="border: rgb(160, 126, 255) 2px solid; display: flex; flex-direction: row; gap: 5px; align-items: center; color: rgb(160, 126, 255); justify-content: center;"><i
                                    class="fa-solid fa-download fa-xl"
                                    style="color: rgb(160, 126, 255);"></i><strong>Export</strong></button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section class="container-fluid">
                <div class="row row-eq-height five-col custom-row-gap">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="card" style="color: #0d6efd;">
                            <div class="summary">
                                <div class="summary-header">
                                    <div style="background-color: color-mix(in srgb, #0d6efd 15%, transparent);">
                                        <i class="fa-solid fa-book-open fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <span>คอร์สทั้งหมด</span><strong>156</strong><span>หลักสูตร</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="card" style="color: #198754;">
                            <div class="summary">
                                <div class="summary-header">
                                    <div style="background-color: color-mix(in srgb, #198754 15%, transparent);">
                                        <i class="fa-regular fa-file-lines fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <span>เนื้อหาทั้งหมด</span><strong>1,248</strong><span>ไฟล์</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="card" style="color: #6f42c1;">
                            <div class="summary">
                                <div class="summary-header">
                                    <div style="background-color: color-mix(in srgb, #6f42c1 15%, transparent);">
                                        <i class="fa-solid fa-user-group fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <span>ผู้ใช้ทั้งหมด</span><strong>512</strong><span>คน</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="card" style="color: #ffc107;">
                            <div class="summary">
                                <div class="summary-header">
                                    <div style="background-color: color-mix(in srgb, #ffc107 15%, transparent);">
                                        <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <span>แบบทดสอบทั้งหมด</span><strong>342</strong><span>ข้อ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="card" style="color: #000000;">
                            <div class="summary">
                                <div class="summary-header">
                                    <div style="background-color: color-mix(in srgb, #000000 15%, transparent);">
                                        <i class="fa-regular fa-rectangle-list fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <span>บันทึกการใช้งาน (Logs)</span><strong>2,853</strong><span>รายการ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- SECTION 3 -->
            <section class="section3">
                <div class="row row-eq-height custom-row-gap">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>การอัปโหลดเนื้อหาล่าสุด</strong></div>
                            <div class="card-body" style="font-size: smaller;">
                                <div class="table-responsive">
                                    <table class="table table-no-border">
                                        <tbody>
                                            <tr style="color: gray;">
                                                <td><i class="fa-regular fa-file-lines" style="color: #dc3545;"></i>
                                                </td>
                                                <td style="color:#000000;">คู่มือการตั้งค่าเครื่องจักร รุ่นใหม่</td>
                                                <td>PDF</td>
                                                <td>15/05/2024 10:30</td>
                                                <td>Admin</td>
                                            </tr>
                                            <tr style="color: gray;">
                                                <td><i class="fa-regular fa-file-lines" style="color: #198754;"></i>
                                                </td>
                                                <td style="color:#000000;">แนวทางการควบคุมคุณภาพ</td>
                                                <td style="color:#198754;">PPTX</td>
                                                <td>15/05/2024 09:15</td>
                                                <td>Trainer01</td>
                                            </tr>
                                            <tr style="color: gray;">
                                                <td><i class="fa-regular fa-file-video" style="color: #0d6efd;"></i>
                                                </td>
                                                <td style="color:#000000;">คลิปการบำรุงรักษาเครื่องจักร</td>
                                                <td style="color:#198754;">Video</td>
                                                <td>14/05/2024 16:45</td>
                                                <td>Trainer02</td>
                                            </tr>
                                            <tr style="color: gray;">
                                                <td><i class="fa-regular fa-file-excel" style="color: #198754;"></i>
                                                </td>
                                                <td style="color:#000000;">แบบฟอร์มตรวจสุขภาพ</td>
                                                <td style="color:#198754;">Excel</td>
                                                <td>15/05/2024 14:30</td>
                                                <td>Admin</td>
                                            </tr>
                                            <tr style="color: gray;">
                                                <td><i class="fa-regular fa-file-image" style="color: #0d6efd;"></i>
                                                </td>
                                                <td style="color:#000000;">ภาพขั้นตอนงานไลน์</td>
                                                <td style="color:#198754;">Image</td>
                                                <td>14/05/2024 10:15</td>
                                                <td>Admin</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูทั้งหมด<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>คอร์สที่ต้องติดตาม (Overdue)</strong></div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction: column; gap: 10px;">
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                                            <div
                                                style="color: #dc3545; display: flex; flex-direction: row; gap:5px; align-items: center;">
                                                <i class="fa-solid fa-circle"></i><strong>1</strong>
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>GMP Refresher Training</strong>
                                                <span style="color: gray;">ครบกำหนด 10 พ.ค. 67</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: row; align-items: center; gap:5px;">
                                            <strong>28</strong>คน
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                                            <div
                                                style="color: #dc3545; display: flex; flex-direction: row; gap:5px; align-items: center;">
                                                <i class="fa-solid fa-circle"></i><strong>2</strong>
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>Safety Training Annual 2024</strong>
                                                <span style="color: gray;">ครบกำหนด 8 พ.ค. 67</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: row; align-items: center; gap:5px;">
                                            <strong>21</strong>คน
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                                            <div
                                                style="color: #dc3545; display: flex; flex-direction: row; gap:5px; align-items: center;">
                                                <i class="fa-solid fa-circle"></i><strong>3</strong>
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>HACCP Awareness</strong>
                                                <span style="color: gray;">ครบกำหนด 5 พ.ค. 67</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: row; align-items: center; gap:5px;">
                                            <strong>18</strong>คน
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                                            <div
                                                style="color: #dc3545; display: flex; flex-direction: row; gap:5px; align-items: center;">
                                                <i class="fa-solid fa-circle"></i><strong>4</strong>
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>Machine Setup</strong>
                                                <span style="color: gray;">ครบกำหนด 2 พ.ค. 67</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: row; align-items: center; gap:5px;">
                                            <strong>14</strong>คน
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                                            <div
                                                style="color: #dc3545; display: flex; flex-direction: row; gap:5px; align-items: center;">
                                                <i class="fa-solid fa-circle"></i><strong>5</strong>
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>QC Basic</strong>
                                                <span style="color: gray;">ครบกำหนด 1 พ.ค. 67</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: row; align-items: center; gap:5px;">
                                            <strong>9</strong>คน
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูทั้งหมด<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>ภาพรวมการเรียนรู้</strong></div>
                            <div class="card-body">
                                <div class="row row-eq-height custom-row-gap" style="margin-bottom: 10px;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="card" style="padding: 10px; padding-bottom: 0;">
                                            <div class="card-header">การเรียนรู้เสร็จสิ้น</div>
                                            <div class="card-body">
                                                <div class="summary">
                                                    <div style="position: relative; width: 70px; height: 70px;">
                                                        <div id="donut_single" style="width: 70px; height: 70px;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #198754; pointer-events: none;">
                                                            78%</div>
                                                    </div>
                                                    <div class="summary-body">
                                                        <h3 style="margin: 0; color: #198754; font-weight: bold;">78%
                                                        </h3>
                                                        <div><span style="color: #198754;">+6%</span> จากเดือนก่อน
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="card" style="padding: 10px;">
                                            <div class="card-header">อัตตราการเข้าเรียน</div>
                                            <div class="card-body"
                                                style="display: flex; align-items: center; height: 100%;">
                                                <div class="summary">
                                                    <div class="summary-header">
                                                        <div
                                                            style="background-color: color-mix(in srgb, #6f42c1 15%, transparent); padding-inline: 10px; border-radius: 50%;">
                                                            <i class="fa-solid fa-user-group fa-lg"
                                                                style="color: #6f42c1;"></i>
                                                        </div>
                                                    </div>
                                                    <div class="summary-body">
                                                        <div
                                                            style="display: flex; flex-direction: row; gap:5px; align-items: end;">
                                                            <h3 style="margin: 0; font-weight: bold;">356</h3>คน
                                                        </div>
                                                        <div><span style="color: #198754;">+8%</span> จากเดือนก่อน</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-eq-height custom-row-gap">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="card" style="padding: 10px;">
                                            <div class="card-header">เวลาเรียนรวม</div>
                                            <div class="card-body"
                                                style="display: flex; align-items: center; height: 100%;">
                                                <div class="summary">
                                                    <div class="summary-header"
                                                        style="display: flex; align-items: center;">
                                                        <i class="fa-regular fa-clock fa-2xl" style="color: #000;"></i>
                                                    </div>
                                                    <div class="summary-body">
                                                        <div
                                                            style="display: flex; flex-direction: row; gap:5px; align-items: end;">
                                                            <h3 style="margin: 0; font-weight: bold;">1,248</h3>ชม.
                                                        </div>
                                                        <div><span style="color: #198754;">+120 ชม.</span> จากเดือนก่อน
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="card" style="padding: 10px;">
                                            <div class="card-header">การเรียนรู้ต่อคน (เฉลี่ย)</div>
                                            <div class="card-body"
                                                style="display: flex; align-items: center; height: 100%;">
                                                <div class="summary">
                                                    <div class="summary-header">
                                                        <div
                                                            style="background-color: color-mix(in srgb, #ffc107 15%, transparent); padding-inline: 10px; border-radius: 50%;">
                                                            <i class="fa-regular fa-user fa-lg"
                                                                style="color:#ffc107;"></i>
                                                        </div>
                                                    </div>
                                                    <div class="summary-body">
                                                        <div
                                                            style="display: flex; flex-direction: row; gap:5px; align-items: end;">
                                                            <h3 style="margin: 0; font-weight: bold;">2.4</h3>หลักสูตร
                                                        </div>
                                                        <div><span style="color: #198754;">+0.3%</span> จากเดือนก่อน
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูรายงานฉบับเต็ม<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 -->
            <section>
                <div class="row row-eq-height custom-row-gap">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>การเรียนรู้ตามแผนก</strong></div>
                            <div class="card-body" style="font-size: smaller;">
                                <div class="table-responsive">
                                    <table class="table table-condensed table-no-border">
                                        <thead>
                                            <tr>
                                                <th>แผนก</th>
                                                <th>ผู้เรียน (คน)</th>
                                                <th colspan="2">Completion Rate</th>
                                                <th colspan="2">Pass Rate</th>
                                                <th>คอร์สที่กำลังเรียน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Production</td>
                                                <td>248</td>
                                                <td>82%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>6%</td>
                                                <td>76%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>4%</td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                        </div>
                                                    </div>
                                                    10
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quality Control</td>
                                                <td>64</td>
                                                <td>78%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>4%</td>
                                                <td>72%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>2%</td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                        </div>
                                                    </div>
                                                    7
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maintanance</td>
                                                <td>48</td>
                                                <td>75%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>3%</td>
                                                <td>70%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>3%</td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                        </div>
                                                    </div>
                                                    6
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Supply Chain</td>
                                                <td>42</td>
                                                <td>71%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>2%</td>
                                                <td>68%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>1%</td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                        </div>
                                                    </div>
                                                    5
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Engineering</td>
                                                <td>38</td>
                                                <td>69%</td>
                                                <td style="color: #dc3545;"><i class="fa-solid fa-caret-down"></i>1%
                                                </td>
                                                <td>66%</td>
                                                <td style="color: #dc3545;"><i class="fa-solid fa-caret-down"></i>1%
                                                </td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="30"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                                        </div>
                                                    </div>
                                                    4
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Administration</td>
                                                <td>72</td>
                                                <td>80%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>5%</td>
                                                <td>75%</td>
                                                <td style="color: #198754;"><i class="fa-solid fa-caret-up"></i>3%</td>
                                                <td style="display: flex; flex-direction: row; gap: 5px;">
                                                    <div class="progress" style="height: 15px; width: 70%;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                        </div>
                                                    </div>
                                                    8
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูรายงานเพื่มเติม<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>หลักสูตรที่นักเรียกมากที่สุด</strong></div>
                            <div class="card-body" style="font-size: small;">
                                <div style="display: flex; flex-direction: column; gap: 5px;">
                                    <div style="display:flex; flex-direction: row; justify-content:space-between;">
                                        <div style="display:flex; flex-direction: row; align-items: center; gap:20px;">
                                            <h4 style="margin: 0; font-weight:bold;">1</h4>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>GMP Refresher Training</strong>
                                                <span>ผู้เรียน 156 คน</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex; flex-direction: row; align-items: center; gap: 5px; width: 40%">
                                            <div class="progress" style="height: 15px; flex: 1; margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                </div>
                                            </div>
                                            <span style="white-space: nowrap;">60%</span>
                                        </div>
                                    </div>
                                    <div style="display:flex; flex-direction: row; justify-content:space-between;">
                                        <div style="display:flex; flex-direction: row; align-items: center; gap:20px;">
                                            <h4 style="margin: 0; font-weight:bold;">2</h4>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>Machine Setup</strong>
                                                <span>ผู้เรียน 128 คน</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex; flex-direction: row; align-items: center; gap: 5px; width: 40%">
                                            <div class="progress" style="height: 15px; flex: 1; margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="48"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                                </div>
                                            </div>
                                            <span style="white-space: nowrap;">48%</span>
                                        </div>
                                    </div>
                                    <div style="display:flex; flex-direction: row; justify-content:space-between;">
                                        <div style="display:flex; flex-direction: row; align-items: center; gap:20px;">
                                            <h4 style="margin: 0; font-weight:bold;">3</h4>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>QC Basic</strong>
                                                <span>ผู้เรียน 102 คน</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex; flex-direction: row; align-items: center; gap: 5px; width: 40%">
                                            <div class="progress" style="height: 15px; flex: 1; margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                </div>
                                            </div>
                                            <span style="white-space: nowrap;">40%</span>
                                        </div>
                                    </div>
                                    <div style="display:flex; flex-direction: row; justify-content:space-between;">
                                        <div style="display:flex; flex-direction: row; align-items: center; gap:20px;">
                                            <h4 style="margin: 0; font-weight:bold;">4</h4>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>Work Instruction Line 1</strong>
                                                <span>ผู้เรียน 88 คน</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex; flex-direction: row; align-items: center; gap: 5px; width: 40%">
                                            <div class="progress" style="height: 15px; flex: 1; margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="35"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                                </div>
                                            </div>
                                            <span style="white-space: nowrap;">35%</span>
                                        </div>
                                    </div>
                                    <div style="display:flex; flex-direction: row; justify-content:space-between;">
                                        <div style="display:flex; flex-direction: row; align-items: center; gap:20px;">
                                            <h4 style="margin: 0; font-weight:bold;">5</h4>
                                            <div style="display: flex; flex-direction: column;">
                                                <strong>In-progress Quality Control</strong>
                                                <span>ผู้เรียน 75 คน</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex; flex-direction: row; align-items: center; gap: 5px; width: 40%">
                                            <div class="progress" style="height: 15px; flex: 1; margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="28"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
                                                </div>
                                            </div>
                                            <span style="white-space: nowrap;">28%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูทั้งหมด<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>สถานะระบบ</strong></div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction: column; gap: 5px;">
                                    <div
                                        style="display: flex; flex-direction: row; width: 100%; justify-content: space-between; align-items: end;">
                                        <div style="display: flex; flex-direction: column; width: 90%;">
                                            <div
                                                style="display: flex; flex-direction: row; justify-content: space-between;">
                                                <span>พื้นที่จัดเก็บ</span>
                                                <span>266 GB / 1 TB</span>
                                            </div>
                                            <div class="progress" style="height: 15px; width: 100%; margin: 2px;">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 25%;">
                                                </div>
                                            </div>
                                        </div>
                                        <span>25%</span>
                                    </div>
                                    <div class="card">
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between;">
                                            <span>ผู้ใช้งานออนไลน์</span>
                                            <div
                                                style="display: flex; flex-direction:row; gap: 5px; align-items:center;">
                                                <strong>45 คน</strong>
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between;">
                                            <span>การใช้งานวันนี้</span>
                                            <div
                                                style="display: flex; flex-direction:row; gap: 5px; align-items:center;">
                                                <strong>1,246 ครั้ง</strong>
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between;">
                                            <span>Backup ล่าสุด</span>
                                            <div
                                                style="display: flex; flex-direction:row; gap: 5px; align-items:center;">
                                                <strong>15/05/2024 02:00</strong>
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span style="color: #198754;"><i
                                        class="fa-solid fa-circle-check"></i> ทำงานปกติ</span></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 5 -->
            <section>
                <div class="row row-eq-height custom-row-gap">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>ประกาศจากผู้ดูแลระบบ</strong></div>
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div
                                            style="background-color: color-mix(in srgb, #0d6efd 15%, transparent); padding-inline: 10px;">
                                            <i class="fa-solid fa-bullhorn fa-lg" style="color: #0d6efd;"></i>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column; gap:5px;">
                                        <strong>ระบบจะปิดปรับปรูงในวันที่ 25 พฤษภาคม 2567 เวลา 22:00 - 02:00 น.</strong>
                                        <span>อาจไม่สามารถใช้งานระบบในช่วงเวลาดังกล่าว ขออภัยในความไม่สดวก</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูทั้งหมด<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>นโยบายและกำหนดการสำคัญ</strong></div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction:column; gap:5px;">
                                    <div
                                        style="display: flex; flex-direction:row; justify-content: space-between; align-items: center;">
                                        <div class="summary">
                                            <div class="summary-header">
                                                <div
                                                    style="background-color: color-mix(in srgb, #0d6efd 15%, transparent); padding-inline: 10px;">
                                                    <i class="fa-regular fa-file-lines fa-lg"
                                                        style="color: #0d6efd;"></i>
                                                </div>
                                            </div>
                                            <div style="display: flex; flex-direction: column; gap:5px;">
                                                <strong>นโยบายความปลอดภัยในการทำงาน</strong>
                                                <span>อัปเดตล่าสุด 01/05/2024</span>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-default"
                                            style="color:#0d6efd; border:#0d6efd 1px solid;">ดูเอกสาร</a>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction:row; justify-content: space-between; align-items: center;">
                                        <div class="summary">
                                            <div class="summary-header">
                                                <div
                                                    style="background-color: color-mix(in srgb, #198754 15%, transparent); padding-inline: 10px;">
                                                    <i class="fa-regular fa-file-lines fa-lg"
                                                        style="color: #198754;"></i>
                                                </div>
                                            </div>
                                            <div style="display: flex; flex-direction: column; gap:5px;">
                                                <strong>แผนการอบรมประจำปี 2567</strong>
                                                <span>อัปเดตล่าสุด 01/01/2024</span>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-default"
                                            style="color:#0d6efd; border:#0d6efd 1px solid;">ดูเอกสาร</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="">ดูทั้งหมด<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="summary">
                                <div class="summary-header">
                                    <div
                                        style="padding: 10px; background-color: color-mix(in srgb, #ffc107 15%, transparent);">
                                        <i class="fa-solid fa-user-clock fa-xl" style="color: #ffc107;"></i>
                                    </div>
                                </div>
                                <div class="summary-body">
                                    <strong style="font-size: large;">การอนุมัติที่รออยู่</strong>
                                    <h5><span style="color: #ffc107; font-weight:bold; font-size: large;">7</span>
                                        รายการ</h5>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="">ดูรายการ<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Effort', 'Amount given'],
                ['Success', 70],
                ["Bonus", 8],
                ["Unfinished", 22]
            ]);

            var options = {
                pieHole: 0.7,
                pieSliceText: 'none',
                tooltip: { trigger: 'none' },
                legend: 'none',
                chartArea: {
                    left: 0,
                    top: 0,
                    width: '100%',
                    height: '100%'
                },
                slices: {
                    0: { color: "green" },
                    1: { color: "aqua" },
                    2: { color: "whitesmoke" }
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
            chart.draw(data, options);
        }
    </script>

    <script>
        $(function () {
            $('#dateRange').daterangepicker({
                autoUpdateInput: true,
                locale: {
                    format: 'DD/MM/YYYY',
                    separator: ' - ',
                    applyLabel: 'เลือก',
                    cancelLabel: 'ล้าง',
                    fromLabel: 'จาก',
                    toLabel: 'ถึง',
                    customRangeLabel: 'กำหนดเอง',
                    weekLabel: 'W',
                    daysOfWeek: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                    monthNames: [
                        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                        'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                    ],
                    firstDay: 1
                }
            });
        });
    </script>

</body>

</html>