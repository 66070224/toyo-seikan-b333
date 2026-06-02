<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOBS3</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<style>
    /* --- ซอร์สโค้ดนำเข้าฟอนต์ขององค์กร --- */
    @font-face {
        font-family: 'SupermarketCustom';
        src: url('../assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body,
    html {
        overflow-x: hidden;
    }

    body {
        font-family: 'SupermarketCustom', sans-serif;
        background-color: #f6f8fb;
    }

    p {
        margin-bottom: 0;
    }

    a {
        color: #000000;
        text-decoration: none !important;
    }

    .card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        border: 1px solid #eef2f5;
        display: flex;
        flex-direction: column;
        gap: 10px;

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid #f8f9fa;
            padding: 0 0 12px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;

            h5 {
                margin: 0;
                font-size: 18px;
                font-weight: 500;
                color: #111111;
            }

            @media (max-width: 320px) {
                h5 {
                    font-size: smaller;
                }
            }

            a {
                color: #106bd3;
                font-size: 15px;
                font-weight: 600;
            }
        }

        .card-body {
            padding: 15px 0 0 0;
            flex: 1;
        }

        .card-footer {
            background-color: transparent;
            border-top: none;
            padding: 12px 0 0 0;
            display: flex;
            justify-content: center;
            align-items: center;

            a.btn-footer-blue {
                border: 1px solid #1d71b8;
                background-color: #ffffff;
                color: #1d71b8;
                text-align: center;
                width: 50%;
                padding: 8px 0;
                border-radius: 7px;
                font-size: 16px;
                font-weight: 600;
                transition: background-color 0.2s;
            }

            a.btn-footer-blue:hover {
                background-color: #f4f9fd;
            }

        }
    }

    .card-footers {
        background-color: transparent;
        border-top: none;
        padding: 12px 0 0 0;
        display: flex;
        justify-content: flex-start;
        align-items: center;

        a.btn-footer-blues {
            border: 1px solid #1d71b8;
            background-color: #ffffff;
            color: #1d71b8;
            text-align: center;
            width: 30%;
            padding: 8px 0;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s;
            justify-content: flex-start;
        }

        a.btn-footer-blues:hover {
            background-color: #f4f9fd;
        }
    }


    .row>div {
        padding-left: 8px;
        padding-right: 8px;
        margin-bottom: 5px;
    }

    section {
        margin-bottom: 5px;
    }

    /* --- CSS เฉพาะส่วนงานของ Section 1 (Flexbox) --- */
    .section-1 {

        /* สร้างคลาสแบ่ง 5 คอลัมน์ สำหรับหน้าจอขนาดใหญ่ */
        @media (min-width: 1200px) {
            .custom-5-col {
                width: 20%;
            }
        }

        .card-stat {
            flex-direction: row;
            align-items: flex-start;
            padding: 16px;
            min-height: 105px;
            position: relative;
            gap: 12px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            margin-top: 13px;

        }

        .stat-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            margin-left: 15px;
            gap: 8px;
        }

        .stat-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .stat-value-row {
            display: flex;
            align-items: baseline;
            gap: 15px;
        }

        .stat-qty {
            font-size: 28px;
            font-weight: bold;
            color: #1d71b8;
            line-height: 1;
        }

        .stat-qty2 {
            font-size: 28px;
            font-weight: bold;
            color: #2e7d32;
            line-height: 1;
        }

        .stat-qty3 {
            font-size: 28px;
            font-weight: bold;
            color: #f59e0b;
            line-height: 1;
        }

        .stat-qty4 {
            font-size: 28px;
            font-weight: bold;
            color: #7b1fa2;
            line-height: 1;
        }


        .stat-qty5 {
            font-size: 28px;
            font-weight: bold;
            color: #d32f2f;
            line-height: 1;
        }

        .stat-unit {
            font-size: 15px;
            color: #333333;
            font-weight: 600;


        }

        .stat-footer-text {
            font-size: 12px;
            color: #888888;
            margin-top: 5px;
            font-weight: 600;
        }

        .stat-badge {
            position: absolute;
            bottom: 16px;
            right: 20px;
            font-size: 15px;
            font-weight: bold;
            padding: 2px 10px;
            border-radius: 12px;
        }

        /* ชุดสี (Colors) ซ้อนอยู่ด้านใน Section 1 */
        .color-blue {
            .stat-icon {
                background-color: #f0f7ff;
                color: #1d71b8;
                width: 60px;
                height: 60px;
            }

            .stat-title {
                color: #1d71b8;
            }
        }

        .color-green {
            .stat-icon {
                background-color: #e8f5e9;
                color: #2e7d32;
                width: 60px;
                height: 60px;
            }

            .stat-title {
                color: #2e7d32;
            }

            .stat-badge {
                background-color: #e8f5e9;
                color: #2e7d32;
            }
        }

        .color-yellow {
            .stat-icon {
                background-color: #fff8e1;
                color: #f59e0b;
                width: 60px;
                height: 60px;
            }

            .stat-title {
                color: #f59e0b;
            }

            .stat-badge {
                background-color: #fff8e1;
                color: #f59e0b;
            }
        }

        .color-purple {
            .stat-icon {
                background-color: #f3e5f5;
                color: #7b1fa2;
                width: 60px;
                height: 60px;
            }

            .stat-title {
                color: #7b1fa2;
            }

            .stat-badge {
                background-color: #f3e5f5;
                color: #7b1fa2;
            }
        }

        .color-red {
            .stat-icon {
                background-color: #ffebee;
                color: #d32f2f;
                width: 60px;
                height: 60px;
            }

            .stat-title {
                color: #d32f2f;
            }

            .stat-badge {
                background-color: #ffebee;
                color: #d32f2f;
            }
        }
    }

    .section-2 {

        .progress-split-layout {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 120px;
        }

        .progress-split-left {
            width: 130px;
            flex-shrink: 0;

        }

        .progress-split-right {
            flex: 1;
        }

        /* 2. SVG กราฟวงกลม */
        .progress-circle-block {
            position: relative;
            width: 130px;
            height: 130px;
            margin: 0 auto;
            margin-top: -40px;
        }

        .progress-circle-svg {
            transform: rotate(-90deg);
            width: 155%;
            height: 155%;
        }

        .progress-circle-bg {
            fill: none;
            stroke: #eef2f5;
            stroke-width: 8;
        }

        .progress-circle-value {
            fill: none;
            stroke: #2ecc71;
            stroke-width: 8;
            stroke-linecap: round;
        }

        .progress-circle-text {
            position: absolute;
            top: 80%;
            left: 80%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }

        .progress-circle-pct {
            display: block;
            font-size: 42px;
            font-weight: bold;
            color: #111111;
            line-height: 1;
        }

        .progress-circle-label {
            display: block;
            font-size: 12px;
            color: #141414;
            margin-top: 4px;
            font-weight: 600
        }

        /* 3. รายการสเตตัสฝั่งขวา */
        .progress-status-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin-top: 25px;
        }

        .status-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
        }

        .status-dot-title {
            display: flex;
            align-items: center;
            color: #111111;
            font-weight: 600;
        }

        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 10px;
            display: inline-block;
        }

        .status-dot.green {
            background-color: #2ecc71;
        }

        .status-dot.orange {
            background-color: #f39c12;
        }

        .status-dot.grey {
            background-color: #e0e0e0;
        }

        .status-result-badge {
            font-size: 12px;
            color: #666;
            text-align: center;
            display: flex;
        }

        .status-result-badge .bold-text {
            font-weight: bold;
            font-size: 16px;
            width: 45px;
            text-align: right;
            margin-right: 18px;
            margin-left: 0;
        }

        .text-green {
            color: #2ecc71;
        }

        .status-result-badge>span:last-child {
            width: 65px;
            text-align: left;
        }

        .text-orange {
            color: #f39c12;
        }

        .text-grey {
            color: #999999;
        }


        /* --- แผนการเรียนของฉัน (หลอดแนวนอน) --- */
        .linear-progress-group {
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin-top: 15px;
        }

        .linear-row-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .linear-title-area {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 200px;
            flex-shrink: 0;
        }

        .linear-title-area i {
            font-size: 20px;
            width: 16px;
            text-align: center;
        }

        .linear-title-area span {
            font-size: 15px;
            font-weight: 600;
            color: #111;
        }

        .linear-bar-wrapper {
            flex: 1;
            margin: 0 20px;
            height: 6px;
            background-color: #edf2f6;
            border-radius: 10px;
            overflow: hidden;
        }

        .linear-bar-fill {
            height: 100%;
            border-radius: 10px;
        }

        .linear-qty-area {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 150px;
            flex-shrink: 0;
        }

        .linear-qty-area .pct {
            width: 35px;
            text-align: right;
            font-size: 14px;
            font-weight: 600;
            color: #0f0f0f;
        }

        .linear-qty-area .fraction {
            width: 100px;
            text-align: left;
            font-size: 14px;
            font-weight: 600;
            color: #5c5c61;
            margin-left: 20px;
            white-space: nowrap;
        }

        .icon-box {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .icon-blue {
            background: #eef6ff;
            color: #1d71b8;
        }

        .icon-green {
            background: #eaf8ee;
            color: #2ecc71;
        }

        .icon-orange {
            background: #fff8e8;
            color: #f39c12;
        }

        .icon-box i {
            margin-top: 2px;
            margin-left: -5px;
        }


        /* 3. การ์ดที่ 3: รายการบทเรียนกำหนดเวลา */
        .lesson-flex-list {
            display: flex;
            flex-direction: column;
            gap: 13px;
            margin-top: 10px;
        }

        .lesson-row-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 12px;
            border-bottom: 1px dashed #eef2f5;
        }

        .lesson-row-card:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .lesson-info-left {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .lesson-info-left i {
            font-size: 18px;
            color: #1d71b8;
            margin-top: 5px;
            margin-left: 1px;
        }

        .lesson-name-sub {
            display: flex;
            flex-direction: column;
        }

        .lesson-main-name {
            font-size: 14px;
            font-weight: 600;
            color: #111;
            margin-bottom: 2px;
        }

        .lesson-deadline-date {
            font-size: 13px;
            font-weight: bold;
            color: #ff3b30;
            text-align: right;
        }

        .lesson-deadline-date span {
            display: block;
            font-size: 11px;
            color: #ff3b30;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .lesson-sub-name {
            font-weight: 600;
        }
    }

    .section-3 {}

    .section-4 {}
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
        <div class="container-fluid p-5">
            <section class="section-1 row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-blue">
                        <div class="stat-icon"><i class="fa-solid fa-book-open"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">ทั้งหมด</div>
                            <div class="stat-value-row">
                                <span class="stat-qty">32</span>
                                <span class="stat-unit">ดูบทเรียน</span>
                            </div>
                            <div class="stat-footer-text">ที่ต้องเรียนทั้งหมด</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-green">
                        <div class="stat-icon"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">เรียนจบแล้ว</div>
                            <div class="stat-value-row">
                                <span class="stat-qty2">18</span>
                            </div>
                            <div class="stat-unit">
                                ดูบทเรียน
                            </div>
                        </div>
                        <span class="stat-badge">56%</span>
                    </div>


                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-yellow">
                        <div class="stat-icon"><i class="fa-regular fa-clock"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">กำลังเรียน</div>
                            <div class="stat-value-row">
                                <span class="stat-qty3">6</span>
                            </div>
                            <div class="stat-unit">
                                ดูบทเรียน
                            </div>
                        </div>
                        <span class="stat-badge">19%</span>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-purple">
                        <div class="stat-icon"><i class="fa-solid fa-circle-play"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">ยังไม่เริ่ม</div>
                            <div class="stat-value-row">
                                <span class="stat-qty4">6</span>
                            </div>
                            <div class="stat-unit">
                                ดูบทเรียน
                            </div>
                        </div>
                        <span class="stat-badge">19%</span>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-red">
                        <div class="stat-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">ไม่ผ่าน/ต้องซ่อม</div>
                            <div class="stat-value-row">
                                <span class="stat-qty5">2</span>
                            </div>
                            <div class="stat-unit">
                                ดูบทเรียน
                            </div>
                        </div>
                        <span class="stat-badge">6%</span>
                    </div>
                </div>
            </section>

            <section class="section-2 row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="card" style="min-height: 422px;">
                        <div class="card-header">
                            <h5>ความก้าวหน้าการเรียนของฉัน</h5>
                        </div>
                        <div class="card-body">
                            <div class="progress-split-layout">
                                <div class="progress-split-left">
                                    <div class="progress-circle-block">
                                        <svg class="progress-circle-svg" viewBox="0 0 100 100">
                                            <circle class="progress-circle-bg" cx="50" cy="50" r="45"></circle>
                                            <circle class="progress-circle-value" cx="50" cy="50" r="45"
                                                stroke-dasharray="282.7" stroke-dashoffset="124.4"></circle>
                                        </svg>
                                        <div class="progress-circle-text">
                                            <span class="progress-circle-pct">56%</span>
                                            <span class="progress-circle-label">ความคืบหน้า</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-split-right">
                                    <ul class="progress-status-list">
                                        <li class="status-item">
                                            <div class="status-dot-title"><span
                                                    class="status-dot green"></span>ความปลอดภัย (Safety)</div>
                                            <span class="status-result-badge"><span class="bold-text">100%</span> <span
                                                    class="text-green">ผ่าน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span class="status-dot orange"></span>คุณภาพ
                                                (Quality)</div>
                                            <span class="status-result-badge"><span class="bold-text">75%</span> <span
                                                    class="text-orange">กำลังเรียน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span
                                                    class="status-dot orange"></span>การปฏิบัติงานเครื่องจักร</div>
                                            <span class="status-result-badge"><span class="bold-text">40%</span> <span
                                                    class="text-orange">กำลังเรียน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span
                                                    class="status-dot grey"></span>การบำรุงรักษาเบื้องต้น (PM)</div>
                                            <span class="status-result-badge"><span class="bold-text">0%</span> <span
                                                    class="text-grey">ยังไม่เริ่ม</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footers"><a href="#" class="btn-footer-blues">ดูรายละเอียดทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card" style="min-height: 380px;">
                        <div class="card-header">
                            <h5>แผนการเรียนของฉัน <span
                                    style="font-size: 14px; font-weight: 400; color: #555;">(ตามตำแหน่งงาน)</span></h5>
                        </div>
                        <div class="card-body">
                            <div class="linear-progress-group">

                                <div class="linear-row-item">
                                    <div class="linear-title-area">
                                        <div class="icon-box icon-blue"><i class="fa-solid fa-shield-halved"></i></div>
                                        <span>Mandatory Training</span>
                                    </div>
                                    <div class="linear-bar-wrapper">
                                        <div class="linear-bar-fill" style="width: 90%; background-color: #2ecc71;">
                                        </div>
                                    </div>
                                    <div class="linear-qty-area">
                                        <span class="pct">90%</span>
                                        <span class="fraction">9/10 บทเรียน</span>
                                    </div>
                                </div>

                                <div class="linear-row-item">
                                    <div class="linear-title-area">
                                        <div class="icon-box icon-green"><i class="fa-solid fa-gears"></i></div>
                                        <span>Technical Skill</span>
                                    </div>
                                    <div class="linear-bar-wrapper">
                                        <div class="linear-bar-fill" style="width: 78%; background-color: #2ecc71;">
                                        </div>
                                    </div>
                                    <div class="linear-qty-area">
                                        <span class="pct">78%</span>
                                        <span class="fraction">7/9 บทเรียน</span>
                                    </div>
                                </div>

                                <div class="linear-row-item">
                                    <div class="linear-title-area">
                                        <div class="icon-box icon-orange"><i class="fa-solid fa-star"></i></div>
                                        <span>Soft Skill</span>
                                    </div>
                                    <div class="linear-bar-wrapper">
                                        <div class="linear-bar-fill" style="width: 60%; background-color: #f39c12;">
                                        </div>
                                    </div>
                                    <div class="linear-qty-area">
                                        <span class="pct">60%</span>
                                        <span class="fraction">6/10 บทเรียน</span>
                                    </div>
                                </div>

                                <div class="linear-row-item">
                                    <div class="linear-title-area">
                                        <div class="icon-box icon-blue"><i class="fa-solid fa-book-bookmark"></i></div>
                                        <span>Work Instruction</span>
                                    </div>
                                    <div class="linear-bar-wrapper">
                                        <div class="linear-bar-fill" style="width: 45%; background-color: #f39c12;">
                                        </div>
                                    </div>
                                    <div class="linear-qty-area">
                                        <span class="pct">45%</span>
                                        <span class="fraction">5/11 บทเรียน</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer"><a href="#" class="btn-footer-blue">ดูแผนการเรียนทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card" style="min-height: 380px;">
                        <div class="card-header">
                            <h5>บทเรียนที่ต้องเรียน / กำหนดเวลา</h5>
                            <a href="#">ดูทั้งหมด</a>
                        </div>
                        <div class="card-body">
                            <div class="lesson-flex-list">

                                <div class="lesson-row-card">
                                    <div class="lesson-info-left">
                                        <div class="icon-box icon-blue">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>
                                        <div class="lesson-name-sub">
                                            <span class="lesson-main-name">GMP Refresher Training</span>
                                            <span class="lesson-sub-name">ดูบทเรียน</span>
                                        </div>
                                    </div>
                                    <div class="lesson-deadline-date"><span>ครบกำหนด</span>10 พ.ค. 67</div>
                                </div>

                                <div class="lesson-row-card">
                                    <div class="lesson-info-left">
                                        <div class="icon-box icon-blue">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>
                                        <div class="lesson-name-sub">
                                            <span class="lesson-main-name">QC Basic </span>
                                            <span class="lesson-sub-name">ดูบทเรียน</span>
                                        </div>
                                    </div>
                                    <div class="lesson-deadline-date"><span>ครบกำหนด</span>15 พ.ค. 67</div>
                                </div>

                                <div class="lesson-row-card">
                                    <div class="lesson-info-left">
                                        <div class="icon-box icon-blue">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>
                                        <div class="lesson-name-sub">
                                            <span class="lesson-main-name">Machine Setup </span>
                                            <span class="lesson-sub-name">ดูบทเรียน</span>
                                        </div>
                                    </div>
                                    <div class="lesson-deadline-date"><span>ครบกำหนด</span>20 พ.ค. 67</div>
                                </div>

                                <div class="lesson-row-card">
                                    <div class="lesson-info-left">
                                        <div class="icon-box icon-blue">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>
                                        <div class="lesson-name-sub">
                                            <span class="lesson-main-name">Machine Setup Basics</span>
                                            <span class="lesson-sub-name">ดูบทเรียน</span>
                                        </div>
                                    </div>
                                    <div class="lesson-deadline-date"><span>ครบกำหนด</span>20 พ.ค. 67</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"><a href="#" class="btn-footer-blue">ดูแผนการเรียนทั้งหมด</a></div>
                    </div>
                </div>
            </section>

            <section class="section-3 row">
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                หลักสูตรที่ต้องเรียนต่อ
                                <span class="badge" style="background-color: red; margin-left: 5px;">6</span>
                            </h5>
                        </div>
                        <div class="card-body">BODY</div>
                        <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                หลักสูตรที่ไม่ผ่าน / ต้องซ่อม
                                <span class="badge" style="background-color: red; margin-left: 5px;">2</span>
                            </h5>
                        </div>
                        <div class="card-body">BODY</div>
                        <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                ผลประเมินล่าสุด
                            </h5>
                            <a href="">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-4 row">
                <div class="col-lg-4 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">TEST</div>
                </div>
            </section>
        </div>
    </div>

</body>

</html>
</section>

<section class="section-3 row">
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    หลักสูตรที่ต้องเรียนต่อ
                    <span class="badge" style="background-color: red; margin-left: 5px;">6</span>
                </h5>
            </div>
            <div class="card-body">BODY</div>
            <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    หลักสูตรที่ไม่ผ่าน / ต้องซ่อม
                    <span class="badge" style="background-color: red; margin-left: 5px;">2</span>
                </h5>
            </div>
            <div class="card-body">BODY</div>
            <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    ผลประเมินล่าสุด
                </h5>
                <a href="">ดูทั้งหมด</a>
            </div>

        </div>
    </div>
</section>

<section class="section-4 row">
    <div class="col-lg-4 col-12">
        <div class="card">TEST</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card">TEST</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card">TEST</div>
    </div>
</section>
</div>
</div>

</body>

</html>