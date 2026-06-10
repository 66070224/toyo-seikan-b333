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
    :root {
        --primary-color: #0d6efd;
        --secondary-color: #6c757d;
        --success-color: #198754;
        --info-color: #0dcaf0;
        --warning-color: #ffc107;
        --danger-color: #dc3545;
        --orange-color: #fd7e14;
        --purple-color: #6f42c1;

        --primary-color-transparent: color-mix(in srgb, var(--primary-color) 15%, transparent);
        --secondary-color-transparent: color-mix(in srgb, var(--secondary-color-color) 15%, transparent);
        --success-color-transparent: color-mix(in srgb, var(--success-color) 15%, transparent);
        --info-color-transparent: color-mix(in srgb, var(--info-color) 15%, transparent);
        --warning-color-transparent: color-mix(in srgb, var(--warning-color) 15%, transparent);
        --danger-color-transparent: color-mix(in srgb, var(--danger-color) 15%, transparent);
        --orange-color-transparent: color-mix(in srgb, var(--orange-color) 15%, transparent);
        --purple-color-transparent: color-mix(in srgb, var(--purple-color) 15%, transparent);
        --black-color-transparent: color-mix(in srgb, #000 15%, transparent);
    }

    body {
        background-color: whitesmoke;
    }

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

    .table-no-border>thead>tr>th,
    .table-no-border>tbody>tr>th,
    .table-no-border>tfoot>tr>th,
    .table-no-border>thead>tr>td,
    .table-no-border>tbody>tr>td,
    .table-no-border>tfoot>tr>td {
        border: none;
    }

    .space-between {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .card {
        background-color: #ffffff;
        width: 100%;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.2);

        display: flex;
        flex-direction: column;
        height: 100%;
        gap: 10px;
    }

    .card>.card-body {
        font-size: smaller;
    }

    .card>.card-footer {
        margin-top: auto;
        display: flex;
        justify-content: center;
    }

    .card>.card-footer-end {
        margin-top: auto;
        display: flex;
        justify-content: end;
    }

    .row-eq-height {
        display: flex;
        flex-wrap: wrap;
    }

    .row-eq-height>[class*='col-'] {
        display: flex;
    }

    .custom-row-gap>[class*="col-"] {
        padding-inline: 5px;
    }

    .custom-row-gap {
        margin-inline: -5px;
    }

    .summary {
        width: 100%;
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .summary>.summary-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 2rem;
    }

    .summary>.summary-header-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .summary .summary-icon {
        padding: 10px;
        border-radius: 100%;
    }

    .summary>.summary-body {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .truncate {
        display: block;
        width: 100%;
        min-width: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (max-width: 425px) {
        .mandatory {
            flex-direction: column !important;
            align-items: center;
        }

        .mandatory>.mandatory-donut {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            text-align: center;
        }

        .mandatory>.summary-body {
            width: 100%;
        }


    }

    @media (max-width: 767px) {
        .row-eq-height {
            display: block;
        }

        .employee-header {
            flex-direction: column;

            .search {
                width: 100% !important;
            }
        }

        .custom-navbar {
            flex-direction: column !important;
            font-size: smaller;
            padding-inline: 5px !important;
        }

        .custom-navbar>div>div,
        form {
            gap: 0;
            width: 100%;
            justify-content: space-evenly;
        }
    }

    @media (max-width: 1439px) {
        .row>[class*="col-"] {
            margin-bottom: 15px;
        }
    }

    @media (min-width: 1440px) {
        .seven-col>[class*="col-lg-2"] {
            min-width: 14.25%;
            max-width: fit-content;
        }

        .section1 .card {
            padding-inline: 5px;
        }
    }
</style>

<body>

    <nav style="width: 100%; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding-inline: 20px; padding-block: 5px; margin-bottom: 20px; background-color: #fff;"
        class="custom-navbar">
        <a href="#" style=" font-size: larger;">
            <div style="display: flex; flex-direction: row; align-items: center; gap: 10px;">
                <div
                    style="color: var(--primary-color); background-color: var(--primary-color-transparent); padding-block: 10px; padding-inline: 5px; border-radius: 100%;">
                    <i class="fa-solid fa-user-group fa-xl"></i>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <strong>Dashboard หัวหน้างาน</strong>
                    <span style="font-size: smaller;">ภาพรวมการเรียนรู้ของทีม Team A - Line 1 (Filling)</span>
                </div>
            </div>

        </a>
        <div style="display: flex; flex-direction: column; gap: 5px;">
            <div
                style="display: flex; flex-direction: row; justify-content: end; align-items: center; gap: 40px; width: 100%;">
                <div style="display: flex; align-items: center;">
                    <a href="#" class="notification-link">
                        <span style="position: relative; display: inline-block;">
                            <i class="fa-regular fa-bell fa-xl"></i>
                            <span class="badge"
                                style="position: absolute; top: -6px; right: -10px; background-color: #dc3545; color: #fff; padding-inline: 3px; padding-block: 3px; font-size: smaller;">12</span>
                        </span>
                    </a>
                </div>
                <a href=""><i class="fa-regular fa-circle-question fa-xl"></i>
                </a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="display: flex; flex-direction: row; align-items: center;">
                        <div style="display: flex; flex-direction: row; align-items: center; gap: 15px;">
                            <img src="https://img.magnific.com/free-photo/handsome-young-cheerful-man-with-arms-crossed_171337-1073.jpg?semt=ais_hybrid&w=740&q=80"
                                alt="" class="img-circle" style="width: 40px; height: 40px;">
                            <div style="display: flex; flex-direction: column; font-size: smaller;">
                                <strong>คุณธนกร นายสมมุติ</strong>
                                <span>หัวหน้าผ่ายผลิต</span>
                            </div>
                        </div> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
            <form action="" style="display: flex; flex-direction: row; gap: 10px; width: 100%;">
                <div class="input-group">
                    <input type="text" id="dateRange" class="form-control" style="border-right: none;" />
                    <span class="input-group-addon" style="background:#fff;">
                        <i class="fa-regular fa-calendar"></i>
                    </span>
                </div>
                <button type="submit" class="btn btn-default"
                    style="color: var(--primary-color); border-color: var(--primary-color); "><i
                        class="fa-solid fa-filter"></i>
                    ตัวกรอง</button>
            </form>
        </div>
    </nav>




    <div class="main-content">

        <div class="container-fluid">

            <!-- SECTION 1 -->
            <section class="section1">
                <div class="row row-eq-height custom-row-gap seven-col">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                                            <i class="fa-solid fa-users fa-xl" style="color: var(--primary-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body">
                                        <strong>พนักงานในทีมทั้งหมด</strong>
                                        <strong>
                                            <span style="font-size: x-large;">28</span> คน
                                        </strong>
                                        <span>ทั้งหมดในไลน์ 96 คน</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--success-color) 15%, transparent);">
                                            <i class="fa-solid fa-clipboard-check fa-xl"
                                                style="color: var(--success-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body">
                                        <strong>อัตราการเรียนครบ</strong>
                                        <strong style="font-size: x-large;">82%</strong>
                                        <span>23 จาก 28 คน</span>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer-end" style="font-size: smaller;">
                                <span><strong style="color: var(--success-color);"><i class="fa-solid fa-caret-up"></i>
                                        8%</strong> จากเดือนที่แล้ว</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--orange-color) 15%, transparent);">
                                            <i class="fa-solid fa-book-open fa-xl"
                                                style="color: var(--orange-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body">
                                        <strong>หลักสูตรที่กำลังเรียน</strong>
                                        <strong>
                                            <span style="font-size: x-large;">15</span> หลักสูตร
                                        </strong>
                                        <span>กำลังเรียน 48 รายการ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--danger-color) 15%, transparent);">
                                            <i class="fa-solid fa-triangle-exclamation fa-xl"
                                                style="color: var(--danger-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body">
                                        <strong>ผู้เรียนค้างกำหนด</strong>
                                        <strong>
                                            <span style="font-size: x-large;">5</span> คน
                                        </strong>
                                        <span>คิดเป็น 18% ของทีม</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer-end" style="font-size: smaller;">
                                <span><strong style="color: var(--danger-color);"><i class="fa-solid fa-caret-up"></i>
                                        2 คน</strong> จากเดือนที่แล้ว</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--purple-color) 15%, transparent);">
                                            <i class="fa-solid fa-clock fa-xl" style="color: var(--purple-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body" style="min-width: 0;">
                                        <strong>ชั่วโมงการเรียนเฉลี่ย</strong>
                                        <strong>
                                            <span style="font-size: x-large;">14.2</span> ชม.
                                        </strong>
                                        <span>ต่อคน / ต่อเดือน</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer-end" style="font-size: smaller;">
                                <span><strong style="color: var(--success-color);"><i class="fa-solid fa-caret-up"></i>
                                        2.3 ชั่วโมง</strong> จากเดือนที่แล้ว</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                                            <i class="fa-solid fa-star fa-xl" style="color: var(--primary-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body" style="min-width: 0;">
                                        <strong>คะแนนเฉลี่ยแบบทดสอบ</strong>
                                        <strong style="font-size: x-large;">
                                            86%
                                        </strong>
                                        <span>จากทุกหลักสูตร</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer-end" style="font-size: smaller;">
                                <span><strong style="color: var(--success-color);"><i class="fa-solid fa-caret-up"></i>
                                        4%</strong> จากเดือนที่แล้ว</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-header">
                                        <div class="summary-icon"
                                            style="background-color: color-mix(in srgb, var(--success-color) 15%, transparent);">
                                            <i class="fa-solid fa-shield fa-xl"
                                                style="color: var(--success-color);"></i>
                                        </div>
                                    </div>
                                    <div class="summary-body" style="min-width: 0;">
                                        <strong>การอบรมบังคับครบท่วน</strong>
                                        <strong style="font-size: x-large;">
                                            90%
                                        </strong>
                                        <span>25 จาก 28 คน</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer-end" style="font-size: smaller;">
                                <span><strong style="color: var(--success-color);"><i class="fa-solid fa-caret-up"></i>
                                        5%</strong> จากเดือนที่แล้ว</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section>
                <div class="row row-eq-height custom-row-gap">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header space-between">
                                <strong>แนวโน้มการเรียนรู้ของทีม</strong>
                                <select name="" id="" class="form-control"
                                    style="width: fit-content; font-size: smaller;">
                                    <option value="" selected>อัตราการเรียนครบ (%)</option>
                                </select>
                            </div>
                            <div class="card-body" style="flex: 1; min-height: fit-content;">
                                <div id="team-learning-trends" style="width: 100%; height: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>สถานะการอบรมบังคับ (Mandatory)</strong>
                            </div>
                            <div class="card-body">
                                <div class="summary mandatory">
                                    <div class="mandatory-donut"
                                        style="position: relative; width: 150px; height: 150px;">
                                        <div id="donut_single" style="width: 150px; height: 150px;">
                                        </div>
                                        <div
                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); pointer-events: none; font-size: large; display: flex; flex-direction: column; align-items: center;">
                                            <strong>90%</strong><span style="font-size: smaller;">ครบถ้วน</span>
                                        </div>
                                    </div>
                                    <div class="summary-body" style="width: 100%; justify-content: space-evenly;">
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between; width:100%;">
                                            <div
                                                style="display: flex; flex-direction: row; gap: 5px; align-items: center;">
                                                <i class="fa-solid fa-circle" style="color: var(--success-color);"></i>
                                                <strong>ครบถ้วน</strong>
                                            </div>
                                            <span>
                                                <strong>25</strong> คน (90%)
                                            </span>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between; width:100%;">
                                            <div
                                                style="display: flex; flex-direction: row; gap: 5px; align-items: center;">
                                                <i class="fa-solid fa-circle" style="color: var(--warning-color);"></i>
                                                <strong>ใกล้ครบกำหนด</strong>
                                            </div>
                                            <span>
                                                <strong>2</strong> คน (7%)
                                            </span>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: row; justify-content: space-between; width:100%;">
                                            <div
                                                style="display: flex; flex-direction: row; gap: 5px; align-items: center;">
                                                <i class="fa-solid fa-circle" style="color: var(--danger-color);"></i>
                                                <strong>ยังไม่ครบ</strong>
                                            </div>
                                            <span>
                                                <strong>1</strong> คน (3%)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-primary"
                                    style="background-color: var(--primary-color) !important;">ดูรายละเอียดทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-header space-between">
                                <strong>การอบรมใกล้หมดอายุ</strong>
                                <a href="" style="color: var(--primary-color);">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body" style="height: 100%;">
                                <div
                                    style="display: flex; flex-direction: column; justify-content: space-evenly; height: 100%;">
                                    <div
                                        style="display: flex; flex-direction: row; width: 100%; justify-content: space-between; align-items:center; border: 1px whitesmoke solid; border-radius:5px; padding: 5px;">
                                        <div class="summary">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="background-color: color-mix(in srgb, var(--danger-color) 15%, transparent);">
                                                    <i class="fa-solid fa-triangle-exclamation fa-xl"
                                                        style="color: var(--danger-color)"></i>
                                                </div>

                                            </div>
                                            <div class="summary-body" style="gap:5px;">
                                                <strong>GMP Refresher Training</strong>
                                                <span style="color: var(--danger-color);">หมดอายุ 15 มิ.ย.
                                                    2567</span>
                                            </div>
                                        </div>
                                        <span style="width: 10%;"><strong style="font-size: larger;">3</strong>
                                            คน</span>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; width: 100%; justify-content: space-between; align-items:center; border: 1px whitesmoke solid; border-radius:5px; padding: 5px;">
                                        <div class="summary">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="background-color: color-mix(in srgb, var(--danger-color) 15%, transparent);">
                                                    <i class="fa-solid fa-triangle-exclamation fa-xl"
                                                        style="color: var(--danger-color)"></i>
                                                </div>

                                            </div>
                                            <div class="summary-body">
                                                <strong>Safety Training Annual 2024</strong>
                                                <span style="color: var(--danger-color);">หมดอายุ 30 มิ.ย.
                                                    2567</span>
                                            </div>
                                        </div>
                                        <span style="width: 10%;"><strong style="font-size: larger;">4</strong>
                                            คน</span>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; width: 100%; justify-content: space-between; align-items:center; border: 1px whitesmoke solid; border-radius:5px; padding: 5px;">
                                        <div class="summary">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="background-color: color-mix(in srgb, var(--danger-color) 15%, transparent);">
                                                    <i class="fa-solid fa-triangle-exclamation fa-xl"
                                                        style="color: var(--danger-color)"></i>
                                                </div>

                                            </div>
                                            <div class="summary-body">
                                                <strong>HACCP Awareness</strong>
                                                <span style="color: var(--danger-color);">หมดอายุ 10 ก.ค.
                                                    2567</span>
                                            </div>
                                        </div>
                                        <span style="width: 10%;"><strong style="font-size: larger;">2</strong>
                                            คน</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa-solid fa-bell" style="color: var(--purple-color)"></i> <strong>Pedding
                                    (รอดำเนินการ)</strong>
                            </div>
                            <div class="card-body">
                                <div style="display:flex; flex-direction: column; gap:5px;">
                                    <div
                                        style="display: flex; flex-direction: row; border: 1px whitesmoke solid; border-radius:5px; padding: 5px; justify-content: space-between;">
                                        <div style="display: flex; flex-direction: row; align-items:center; gap: 5px;">
                                            <i class="fa-solid fa-angle-right"></i>
                                            <strong>รอประเมินภาคปฎิบัตื</strong>
                                        </div>
                                        <strong
                                            style="color: var(--primary-color); background-color: color-mix(in srgb, var(--primary-color) 15%, transparent); padding-block: 5px; padding-inline: 10px; border-radius: 5px;">5
                                            คน</strong>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; border: 1px whitesmoke solid; border-radius:5px; padding: 5px; justify-content: space-between;">
                                        <div style="display: flex; flex-direction: row; align-items:center; gap: 5px;">
                                            <i class="fa-solid fa-angle-right"></i>
                                            <strong>รอทดสอบซ้ำ (ไม่ผ่าน)</strong>
                                        </div>
                                        <strong
                                            style="color: var(--danger-color); background-color: color-mix(in srgb, var(--danger-color) 15%, transparent); padding-block: 5px; padding-inline: 10px; border-radius: 5px;">3
                                            คน</strong>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; border: 1px whitesmoke solid; border-radius:5px; padding: 5px; justify-content: space-between;">
                                        <div style="display: flex; flex-direction: row; align-items:center; gap: 5px;">
                                            <i class="fa-solid fa-angle-right"></i>
                                            <strong>เอกสารใกล้หมดอายุ</strong>
                                        </div>
                                        <strong
                                            style="color: var(--primary-color); background-color: color-mix(in srgb, var(--primary-color) 15%, transparent); padding-block: 5px; padding-inline: 10px; border-radius: 5px;">9
                                            รายการ</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-warning"
                                    style="background-color: var(--orange-color); width:100%;">ตรวจให้คะแนน /
                                    อนุมัติ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <section>
                <div class="row row-eq-height custom-row-gap">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>สถานะการเรียนรู้ของพนักงานในทีม</strong></div>
                            <div class="card-body">
                                <div class="space-between employee-header" style="margin-bottom: 5px;">
                                    <div class="tags"
                                        style="display:flex; flex-direction: row; gap:2px; align-items: center;">
                                        <div
                                            style="display: flex; flex-direction: row; align-items: center; background-color:var(--primary-color); gap: 2px; padding-left: 5px; border-radius: 5px; padding-right:1px; padding-block: 3px;">
                                            <strong style="color: white;">ทั้งหมด</strong>
                                            <div style="background-color: white; border-radius: 5px;">
                                                <div
                                                    style="padding-inline: 5px; color: var(--primary-color); background-color: var(--primary-color-transparent); border-radius: 5px;">
                                                    <strong>25</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: row; align-items: center; background-color:whitesmoke; gap: 2px; padding-left: 5px; border-radius: 5px; padding-right:1px; padding-block: 5px;">
                                            <strong>เรียนครบ</strong>
                                            <div style="background-color: white; border-radius: 5px;">
                                                <div
                                                    style="padding-inline: 5px; color: var(--success-color); background-color: var(--success-color-transparent); border-radius: 5px;">
                                                    <strong>23</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: row; align-items: center; gap: 2px; padding-left: 5px; border-radius: 5px; padding-right:1px; padding-block: 3px;">
                                            <strong>ใกล้ครบกำหนด</strong>
                                            <div
                                                style="padding-inline: 5px; color: var(--warning-color); background-color: var(--warning-color-transparent); border-radius: 5px;">
                                                <strong>2</strong>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: row; align-items: center; gap: 2px; padding-left: 5px; border-radius: 5px; padding-right:1px; padding-block: 3px;">
                                            <strong>เกินกำหนด</strong>
                                            <div
                                                style="padding-inline: 5px; color: var(--danger-color); background-color: var(--danger-color-transparent); border-radius: 5px;">
                                                <strong>3</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search" style="display:flex; flex-direction:row; width: 35%; gap:5px;">
                                        <input type="search" name="" id="" class="form-control"
                                            placeholder="🔍︎ ค้นหาพนักงาน">
                                        <button class="btn btn-default" type="button"><i
                                                class="fa-solid fa-filter"></i></button>
                                    </div>
                                </div>
                                <div class="table-responsive" style="font-size: smaller;">
                                    <table class="table table-bordered" style="font-size: smaller;">
                                        <thead>
                                            <tr class="active">
                                                <th>#</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>ต่ำแหน่ง</th>
                                                <th>ความคืมหน้า</th>
                                                <th>หลักสูตรที่กำลังเรียน</th>
                                                <th>กำหนดเสร็จ</th>
                                                <th>สถานะ</th>
                                                <th>วันค้างเกินกำหนด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div
                                                        style="display: flex; flex-direction: row; align-items: center;">
                                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                                                            alt="" class="img-responsive img-circle"
                                                            style="max-height: 15px;">นายธนพล ใจดี
                                                    </div>
                                                </td>
                                                <td>ผนักงานผลิต</td>
                                                <td>
                                                    <div style="display: flex; flex-direction: row; gap:1px;">
                                                        <div class="progress"
                                                            style="height: 10px; width: 80%; margin:0;">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 90%;">
                                                            </div>
                                                        </div>
                                                        <span>90%</span>
                                                    </div>
                                                </td>
                                                <td>GMP Refresher</td>
                                                <td>10 พ.ค. 2567</td>
                                                <td><span
                                                        style="padding-inline: 2px; padding-block:1px; color:var(--success-color);background-color: var(--success-color-transparent); border-radius:5px;">เรียนครบ</span>
                                                </td>
                                                <td>10 พ.ค. 2567</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-default"
                                    style="border-color: var(--primary-color); color: var(--primary-color);"
                                    role="button">ดูรายชื่อทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header space-between">
                                <strong>เปรียนเทียบทีมในแผนกเดียวกัน</strong>
                                <select name="" id="" class="form-control" style="width: fit-content;">
                                    <option value="" selected>รายเดือน</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="teamChart" style="width: 100%; height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header space-between"><strong>หลักสูตรที่มีผู้ไม่ผ่านมากที่สุด</strong><a
                                    href="" style="color:var(--primary-color);">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction: column; gap:20px;">
                                    <div class="space-between">
                                        <div class="summary" style="align-items: center;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--danger-color); background-color: var(--danger-color-transparent); border-radius: 5px; padding-block:5px;">
                                                    <strong>1</strong>
                                                </div>
                                            </div>
                                            <strong>Safety Training Annual 2025</strong>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content:space-between; gap: 5px; width: 30%;">
                                            <span>5 คน</span>
                                            <span>(21%)</span>
                                        </div>
                                    </div>
                                    <div class="space-between">
                                        <div class="summary" style="align-items: center;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--success-color); background-color: var(--success-color-transparent); border-radius: 5px; padding-block:5px;">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                            <strong>GMP Refresher Training</strong>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content:space-between; gap: 5px; width: 30%;">
                                            <span>3 คน</span>
                                            <span>(13%)</span>
                                        </div>
                                    </div>
                                    <div class="space-between">
                                        <div class="summary" style="align-items: center;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--primary-color); background-color: var(--primary-color-transparent); border-radius: 5px; padding-block:5px;">
                                                    <strong>3</strong>
                                                </div>
                                            </div>
                                            <strong>Machine Setup</strong>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content:space-between; gap: 5px; width: 30%;">
                                            <span>2 คน</span>
                                            <span>(9%)</span>
                                        </div>
                                    </div>
                                    <div class="space-between">
                                        <div class="summary" style="align-items: center;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--warning-color); background-color: var(--warning-color-transparent); border-radius: 5px; padding-block:5px;">
                                                    <strong>4</strong>
                                                </div>
                                            </div>
                                            <strong>HACCP Awareness</strong>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content:space-between; gap: 5px; width: 30%;">
                                            <span>2 คน</span>
                                            <span>(9%)</span>
                                        </div>
                                    </div>
                                    <div class="space-between">
                                        <div class="summary" style="align-items: center;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style=" background-color: var(--black-color-transparent); border-radius: 5px; padding-block:5px;">
                                                    <strong>5</strong>
                                                </div>
                                            </div>
                                            <strong>QC Basic</strong>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content:space-between; gap: 5px; width: 30%;">
                                            <span>1 คน</span>
                                            <span>(4%)</span>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="card-header space-between">
                                <strong>การแจ้งเตือนและความเสี่ยง</strong>
                                <a href="" style="color: var(--primary-color);">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                <div class="row row-eq-height custom-row-gap">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div
                                            style="padding-inline: 10px; padding-block:20px; color:var(--danger-color); background-color: var(--danger-color-transparent); display: flex; flex-direction: column; gap:10px; justify-content: center; align-items:center; width: 100%; height: 100%; border-radius:10px;">
                                            <div class="space-between" style="align-items: center;"><i
                                                    class="fa-solid fa-triangle-exclamation"></i><span
                                                    style="font-size: smaller;">เกินกำหนดเรียน</span>
                                            </div>
                                            <strong><span style="font-size: medium;">3</span> คน</strong>
                                            <a href="" style="color: var(--danger-color);">ดูรายชื่อ</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div
                                            style="padding-inline: 10px; padding-block:20px; color:var(--orange-color); background-color: var(--orange-color-transparent); display: flex; flex-direction: column; gap:10px; justify-content: center; align-items:center; width: 100%; height: 100%; border-radius:10px;">
                                            <div class="space-between" style="align-items: center;"><i
                                                    class="fa-solid fa-alarm-clock"></i><span
                                                    style="font-size: smaller;">ใกล้ครบกำหนด</span>
                                            </div>
                                            <strong><span style="font-size: medium;">2</span> คน</strong>
                                            <a href="" style="color: var(--orange-color);">ดูรายชื่อ</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div
                                            style="padding-inline: 10px; padding-block:20px; color:var(--warning-color); background-color: var(--warning-color-transparent); display: flex; flex-direction: column; gap:10px; justify-content: center; align-items:center; width: 100%; height: 100%; border-radius:10px;">
                                            <div class="space-between" style="align-items: center;"><i
                                                    class="fa-solid fa-anchor"></i><span
                                                    style="font-size: smaller;">คะแนนต่ำกว่า 80%</span>
                                            </div>
                                            <strong><span style="font-size: medium;">4</span> คน</strong>
                                            <a href="" style="color: var(--warning-color);">ดูรายชื่อ</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div
                                            style="padding-inline: 10px; padding-block:20px; color:var(--primary-color); background-color: var(--primary-color-transparent); display: flex; flex-direction: column; gap:10px; justify-content: center; align-items:center; width: 100%; height: 100%; border-radius:10px;">
                                            <div class="space-between" style="align-items: center;"><i
                                                    class="fa-solid fa-triangle-exclamation"></i><span
                                                    style="font-size: smaller;">เอกสารใกล้หมดอายุ</span>
                                            </div>
                                            <strong><span style="font-size: medium;">9</span> รายการ</strong>
                                            <a href="" style="color: var(--primary-color);">ดูรายการ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header space-between">
                                <strong>แผนการเรียน (Team Roadmap)</strong>
                                <a href="" style="color: var(--primary-color);">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction: column; gap: 10px;">
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items:center;">
                                        <div class="summary" style="align-items: center; width:45%;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--primary-color); background-color: var(--primary-color-transparent); padding:5px;">
                                                    <i class="fa-solid fa-shield fa-lg"></i>
                                                </div>
                                            </div>
                                            <span>Mandatory Training</span>
                                        </div>
                                        <div class="space-between" style="width: fit-content; width:35%;">
                                            <div class="progress" style="width: 80%; height:10px; margin:0;">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 90%;">
                                                </div>
                                            </div>
                                            <span>90%</span>
                                        </div>
                                        <span style="width: 15%; text-align:end;">25/28 คน</span>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items:center;">
                                        <div class="summary" style="align-items: center; width:45%;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--success-color); background-color: var(--success-color-transparent); padding:5px;">
                                                    <i class="fa-solid fa-clipboard-check fa-lg"></i>
                                                </div>
                                            </div>
                                            <span>Technical Skill</span>
                                        </div>
                                        <div class="space-between" style="width: fit-content; width:35%;">
                                            <div class="progress" style="width: 80%; height:10px; margin:0;">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                    aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 78%;">
                                                </div>
                                            </div>
                                            <span>78%</span>
                                        </div>
                                        <span style="width: 15%; text-align:end;">22/28 คน</span>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: row; justify-content: space-between; align-items:center;">
                                        <div class="summary" style="align-items: center; width:45%;">
                                            <div class="summary-header-center">
                                                <div class="summary-icon"
                                                    style="color: var(--warning-color); background-color: var(--warning-color-transparent); padding:5px;">
                                                    <i class="fa-brands fa-bitbucket fa-lg"></i>
                                                </div>
                                            </div>
                                            <span>Soft Skill</span>
                                        </div>
                                        <div class="space-between" style="width: fit-content; width:35%;">
                                            <div class="progress" style="width: 80%; height:10px; margin:0;">
                                                <div class="progress-bar progress-bar-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;">
                                                </div>
                                            </div>
                                            <span>60%</span>
                                        </div>
                                        <span style="width: 15%; text-align:end;">17/28 คน</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header space-between">
                                <strong>Activity ล่าสุดของทีม</strong>
                                <a href="" style="color: var(--primary-color);">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                <div style="display: flex; flex-direction:column;">
                                    <div class="table-responsive">
                                        <table class="table table-no-border" style="font-size: smaller;">
                                            <tbody>
                                                <tr>
                                                    <td><img src="https://img.magnific.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?semt=ais_hybrid&w=740&q=80"
                                                            alt="" class="img-circle" style="height: 20px;"></td>
                                                    <td>นายธนพล ใจดี</td>
                                                    <td>เรียนจบ GMP Refresher Training</td>
                                                    <td>10 พ.ค. 2567</td>
                                                    <td>10:30</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://img.magnific.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?semt=ais_hybrid&w=740&q=80"
                                                            alt="" class="img-circle" style="height: 20px;"></td>
                                                    <td>นายธนพล ใจดี</td>
                                                    <td>เรียนจบ GMP Refresher Training</td>
                                                    <td>10 พ.ค. 2567</td>
                                                    <td>10:30</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://img.magnific.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?semt=ais_hybrid&w=740&q=80"
                                                            alt="" class="img-circle" style="height: 20px;"></td>
                                                    <td>นายธนพล ใจดี</td>
                                                    <td>เรียนจบ GMP Refresher Training</td>
                                                    <td>10 พ.ค. 2567</td>
                                                    <td>10:30</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://img.magnific.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?semt=ais_hybrid&w=740&q=80"
                                                            alt="" class="img-circle" style="height: 20px;"></td>
                                                    <td>นายธนพล ใจดี</td>
                                                    <td>เรียนจบ GMP Refresher Training</td>
                                                    <td>10 พ.ค. 2567</td>
                                                    <td>10:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <script type="text/javascript">
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawDonutChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Month', 'Percent'],
                ['ธ.ค. 66', 58],
                ['ม.ค. 67', 62],
                ['ก.พ. 67', 67],
                ['มี.ค. 67', 72],
                ['เม.ย. 67', 74],
                ['พ.ค. 67', 82]
            ]);

            const options = {
                legend: 'none',
                areaOpacity: 0.15,
                pointSize: 6,
                hAxis: {
                    textStyle: { fontSize: 10 }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 100,
                    textStyle: { fontSize: 10 }
                },
                colors: ['#1a73e8'],
                chartArea: {
                    left: 25,
                    top: 10,
                    width: '88%',
                    height: '75%'
                }
            };

            const chart = new google.visualization.AreaChart(document.getElementById('team-learning-trends'));
            chart.draw(data, options);
        }
        function drawDonutChart() {

            var data = google.visualization.arrayToDataTable([
                ['Effort', 'Amount given'],
                ['Success', 90],
                ["Near", 7],
                ["Unfinished", 3]
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
                    1: { color: "yellow" },
                    2: { color: "red" }
                },
                enableInteractivity: false
            };

            var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
            chart.draw(data, options);
        }
        window.addEventListener('resize', drawChart);
        window.addEventListener('resize', drawDonutChart);

        google.charts.setOnLoadCallback(drawTeamChart);

        function drawTeamChart() {
            const data = google.visualization.arrayToDataTable([
                ['Team', 'Completion Rate', { role: 'annotation' }, 'Pass Rate', { role: 'annotation' }],
                ['Team A\n(ของฉัน)', 90, '90%', 83, '83%'],
                ['Team B', 75, '75%', 68, '68%'],
                ['Team C', 60, '60%', 55, '55%']
            ]);

            const options = {
                legend: { position: 'bottom' },
                colors: ['#18a957', '#1f66e5'],
                backgroundColor: 'transparent',
                bar: { groupWidth: '55%' },
                chartArea: {
                    left: 45,
                    top: 20,
                    width: '88%',
                    height: '72%'
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 100,
                    ticks: [0, 20, 40, 60, 80, 100],
                    textStyle: { fontSize: 11 }
                },
                hAxis: {
                    textStyle: { fontSize: 11 }
                },
                annotations: {
                    alwaysOutside: true,
                    textStyle: {
                        fontSize: 12,
                        bold: true,
                        color: '#111'
                    }
                },
                tooltip: { trigger: 'none' }
            };

            const chart = new google.visualization.ColumnChart(document.getElementById('teamChart'));
            chart.draw(data, options);
        }

        window.addEventListener('resize', drawTeamChart);


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