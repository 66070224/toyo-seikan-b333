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
 @font-face {
        font-family: 'SupermarketCustom';
        src: url('./assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype'); 
        font-weight: normal;
        font-style: normal;
    }

    body, html {
        overflow-x: hidden;
    }

    body {
        font-family: 'SupermarketCustom', sans-serif;
        background-color: #f6f8fb;
    }

    p { margin-bottom: 0; }

    a {
        color: #000000;
        text-decoration: none !important;
    }

    .h-100 { height: 100%; }
    .row-eq-height { display: flex; flex-wrap: wrap; }
    
    .row > div {
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 5px; 
    }

    section {
        margin-bottom: 5px;
    }

    @media (max-width: 767px) {
        .row-eq-height { display: block; }
    }

    .row-eq-height > [class*='col-'] { display: flex; }

    .card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        border: 1px solid #eef2f5;
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;

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

    @media (max-width: 320px) {
        .card .card-header h5 { font-size: smaller; }
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
            background-color: #1d53b8;
            color: #f7f8f8;
            text-align: center;
            width: 30%;
            padding: 8px 0;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        a.btn-footer-blues:hover { background-color: #124399; }
    }

    .bottom-card-group .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        margin-bottom: 20px;
    }


    .section-1 {
        @media (min-width: 1200px) {
            .custom-5-col { width: 20%; }
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
            line-height:1.9;
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

        .stat-qty { font-size: 28px; font-weight: bold; color: #1d71b8; line-height: 1; }
        .stat-qty2 { font-size: 28px; font-weight: bold; color: #2e7d32; line-height: 1; }
        .stat-qty3 { font-size: 28px; font-weight: bold; color: #f59e0b; line-height: 1; }
        .stat-qty4 { font-size: 28px; font-weight: bold; color: #7b1fa2; line-height: 1; }
        .stat-qty5 { font-size: 28px; font-weight: bold; color: #d32f2f; line-height: 1; }
        
        .stat-unit { font-size: 15px; color: #333333; font-weight: 600; }
        .stat-footer-text { font-size: 12px; color: #888888; margin-top: 5px; font-weight: 600; }

        .stat-badge {
            position: absolute;
            bottom: 16px;
            right: 20px;
            font-size: 15px;
            font-weight: bold;
            padding: 2px 10px;
            border-radius: 12px;
        }

        .color-blue {
            .stat-icon { background-color: #f0f7ff; color: #1d71b8; width: 60px; height: 60px;}
            .stat-title { color: #1d71b8; }
        }
        .color-green {
            .stat-icon { background-color: #e8f5e9; color: #2e7d32; width: 60px; height: 60px;}
            .stat-title { color: #2e7d32; }
            .stat-badge { background-color: #e8f5e9; color: #2e7d32; }
        }
        .color-yellow {
            .stat-icon { background-color: #fff8e1; color: #f59e0b; width: 60px; height: 60px;}
            .stat-title { color: #f59e0b; }
            .stat-badge { background-color: #fff8e1; color: #f59e0b; }
        }
        .color-purple {
            .stat-icon { background-color: #f3e5f5; color: #7b1fa2; width: 60px; height: 60px;}
            .stat-title { color: #7b1fa2; }
            .stat-badge { background-color: #f3e5f5; color: #7b1fa2; }
        }
        .color-red {
            .stat-icon { background-color: #ffebee; color: #d32f2f; width: 60px; height: 60px;}
            .stat-title { color: #d32f2f; }
            .stat-badge { background-color: #ffebee; color: #d32f2f; }
        }


    }

    .section-2 {
        .progress-split-layout {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 120px; 
        }
        .progress-split-left { width: 130px; flex-shrink: 0; }
        .progress-split-right { flex: 1; }

        .progress-circle-block { position: relative; width: 130px; height: 130px; margin: 0 auto; margin-top: -40px; }
        .progress-circle-svg { transform: rotate(-90deg); width: 155%; height: 155%; }
        .progress-circle-bg { fill: none; stroke: #eef2f5; stroke-width: 8; }
        .progress-circle-value { fill: none; stroke: #2ecc71; stroke-width: 8; stroke-linecap: round; }
        .progress-circle-text { position: absolute; top: 80%; left: 80%; transform: translate(-50%, -50%); text-align: center; width: 100%; }
        .progress-circle-pct { display: block; font-size: 42px; font-weight: bold; color: #111111; line-height: 1; }
        .progress-circle-label { display: block; font-size: 12px; color: #141414; margin-top: 4px; font-weight:600}

        .progress-status-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 28px; margin-top: 25px; }
        .status-item { display: flex; justify-content: space-between; align-items: center; font-size: 15px; }
        .status-dot-title { display: flex; align-items: center; color: #111111; font-weight: 600; }
        .status-dot { width: 10px; height: 10px; border-radius: 50%; margin-right: 10px; display: inline-block; }
        .status-dot.green { background-color: #2ecc71; }
        .status-dot.orange { background-color: #f39c12;  }
        .status-dot.grey { background-color: #e0e0e0; }
        .status-result-badge { font-size: 12px; color: #666; text-align: center; display: flex; }
        .status-result-badge .bold-text { font-weight: bold; font-size: 16px; width: 45px; text-align: right; margin-right: 18px; margin-left: 0;}     
        .status-result-badge > span:last-child { width: 65px; text-align: left; }
        .text-green { color: #2ecc71; }
        .text-orange { color: #f39c12; }
        .text-grey { color: #999999; }

        .linear-progress-group { display: flex; flex-direction: column; gap: 28px; margin-top: 15px; }
        .linear-row-item { display: flex; align-items: center; justify-content: space-between; width: 100%; }       
        .linear-title-area { display: flex; align-items: center; gap: 15px; width: 200px; flex-shrink: 0; }
        .linear-title-area i { font-size: 20px; width: 16px; text-align: center; } 
        .linear-title-area span { font-size: 15px; font-weight: 600; color: #111; }     
        .linear-bar-wrapper { flex: 1; margin: 0 20px; height: 6px; background-color: #edf2f6; border-radius: 10px; overflow: hidden; }  
        .linear-bar-fill { height: 100%; border-radius: 10px; }
        .linear-qty-area { display: flex; align-items: center; justify-content: flex-end; width: 150px; flex-shrink: 0;}
        .linear-qty-area .pct { width: 35px; text-align: right; font-size: 14px; font-weight: 600; color: #0f0f0f; }
        .linear-qty-area .fraction { width: 100px; text-align: left; font-size: 14px; font-weight: 600; color: #5c5c61; margin-left: 20px; white-space: nowrap; }
        
        .icon-box { width: 40px; height: 40px; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 18px; flex-shrink: 0; }
        .icon-blue { background: #eef6ff; color: #1d71b8; }
        .icon-green { background: #eaf8ee; color: #2ecc71; }
        .icon-orange { background: #fff8e8; color: #f39c12; }
        .icon-box i { margin-top: 2px; margin-left: -5px; }

        .lesson-flex-list { display: flex; flex-direction: column; gap: 13px; margin-top: 10px;}
        .lesson-row-card { display: flex; align-items: center; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #eef2f5; }
        .lesson-row-card:last-child { border-bottom: none; padding-bottom: 0; }
        .lesson-info-left { display: flex; align-items: flex-start; gap: 15px; }
        .lesson-info-left i { font-size: 18px; color: #1d71b8; margin-top: 5px; margin-left: 1px;}
        .lesson-name-sub { display: flex; flex-direction: column; }
        .lesson-main-name { font-size: 14px; font-weight: 600; color: #111; margin-bottom: 2px;}
        .lesson-deadline-date { font-size: 13px; font-weight: bold; color: #ff3b30; text-align: right; }
        .lesson-deadline-date span { display: block; font-size: 11px; color: #ff3b30; font-weight: 500; margin-bottom: 2px;}
        .lesson-sub-name { font-weight:600; }

        .probation-timeline {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            position: relative;
            padding-top: 20px;
            margin-bottom: 20px;
        }

        .probation-timeline::before {
            content: '';
            position: absolute;
            top: 52px;
            left: 10%;
            right: 10%;
            height: 4px;
            background-color: #eef2f5;
            z-index: 1;
        }

        .timeline-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2;
            width: 50%;
        }

        .circle-badge {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 13px;
            font-weight: bold;
            color: white;
            margin-bottom: 25px;           
            position: relative;
            background-color: #f1f4f8; 
            color: #555;
            border: 2px solid white; 
        }

        .circle-badge::after {
            content: '';
            position: absolute;
            bottom: -14px;
            width: 2px;
            height: 14px;
            background-color: inherit;
        }
        .circle-badge::before {
            content: '';
            position: absolute;
            bottom: -14px; 
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: inherit;
        }

        .circle-badge.green { background-color: #2ecc71; color: white;}
        .circle-badge.yellow { background-color: #fbd671; color: white;}

        .step-score { font-size: 18px; font-weight: bold; margin-bottom: 0px;}
        .step-pct { font-size: 16px; font-weight: bold;}
        .step-empty { font-size: 12px; color: #403f46; margin-top: 6px; font-weight: 600;}
        
        .text-green { color: #2ecc71; }
        .text-yellow { color: #f39c12; }

        .probation-alert {
            background-color: #eaf8ee;
            border-radius: 8px;
            padding: 12px 15px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-top: auto;
            border: 2px solid #dbeee1; 
        }
        .probation-alert i {
            color: #2ecc71;
            font-size: 20px;
            margin-top: 13px;
        }
        .probation-alert-text {
            display: flex;
            flex-direction: column;
            font-size: 15px;
            color: #333;
            font-weight: 600;
        }

        
    }

    .section-3 {
        .badge-danger-circle {
            background-color: #e74c3c;
            color: white;
            border-radius: 50%;
            padding: 2px 8px;
            font-size: 12px;
            margin-left: 8px;
            vertical-align: middle;
        }

        .course-row-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 15px;
            margin-bottom: 15px;
            background-color: #ffffff;
            border-radius: 0 8px 8px 0; 
        }

        .course-row-item.border-blue { border-left: 4px solid #1d71b8; }
        .course-row-item.border-red { border-left: 4px solid #e74c3c; }

        .course-info { width: 50%; }
        .course-info h5 { margin: 0; font-size: 14px; font-weight: 700; color: #111; }
        .course-info span { font-size: 12px; color: #777; font-weight: 700; }

        .course-progress-area { 
            width: 30%; 
            display: flex; 
            align-items: center; 
            gap: 20px; 
        }
        .mini-progress { 
            flex: 1; 
            height: 6px; 
            background-color: #edf2f6; 
            border-radius: 10px; 
            overflow: hidden; 
        }
        .mini-progress-bar { height: 100%; border-radius: 10px; background-color: #edf2f6; }
        .mini-progress-bar.blue { background-color: #1d71b8; }
        .progress-text { font-size: 13px; font-weight: 700; color: #111; width: 35px; text-align: left; }

        .btn-outline-blue-sm {
            background-color: #1d53b8;
            color: white;
            border-radius: 7px;
            padding: 8px 20px;
            font-size: 13px;
            text-decoration: none;
        }
        
        .btn-outline-red-sm {
            background-color: transparent;
            color: #e74c3c;
            border: 1px solid #e74c3c;
            border-radius: 6px;
            padding: 4px 20px;
            font-size: 13px;
            text-decoration: none;
        }

        .eval-row-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .eval-info { display: flex; align-items: flex-start; gap: 12px; }
        .eval-info i { margin-top: 4px; font-size: 20px; }
        .eval-info .text-group h5 { margin: 0; font-size: 15px; font-weight: 700; color: #111; }
        .eval-info .text-group span { display: block; font-size: 13px; color: #777; margin-top: 2px; font-weight: 700;}
        
        .eval-score-box {
            background-color: #fafbfc;
            padding: 10px 15px;
            border-radius: 8px;
            text-align: center;
            min-width: 80px;
        }
        .eval-score-box span { font-size: 11px; color: #555; }
        .eval-score-box h4 { margin: 2px 0 0 0; font-size: 18px; font-weight: 800; }
        
        .text-green { color: #2ecc71 !important; }
        .text-red { color: #e74c3c !important; }

    .card-footer {
        background-color: transparent;
        border-top: none; 
        padding: 15px 0 0 0;
        display: flex;
        justify-content: center; 
        align-items: center;
        margin-top: -60px; 
    }

    .card-footer a {
        display: inline-block;
        background-color: #ffffff; 
        color: #1d71b8; 
        font-size: 15px;
        font-weight: 600;
    }
    }

    .section-4 {
        .announce-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }
        .announce-info { display: flex; align-items: center; gap: 12px; width: 75%; }
        .announce-info i { color: #1d71b8; font-size: 18px; }
        .announce-info span { font-size: 14px; color: #111; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .announce-date { font-size: 13px; color: #777; white-space: nowrap; }

        .history-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }
        .history-info { display: flex; align-items: center; gap: 10px; width: 45%; }
        .history-info i { font-size: 18px; }
        .history-info h5 { margin: 0; font-size: 14px; font-weight: 600; color: #111; }
        .history-status { font-size: 13px; color: #777; width: 15%; text-align: center; }
        .history-date { font-size: 13px; color: #777; width: 25%; text-align: center; }
        .history-score { font-size: 15px; font-weight: 700; color: #111; width: 15%; text-align: right; }
        .text-yellow { color: #f39c12; }

        .contact-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .contact-info { display: flex; align-items: center; gap: 12px; width: 50%; }
        .contact-info img { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; }
        .contact-text span { display: block; font-size: 11px; color: #777; }
        .contact-text h5 { margin: 2px 0 0 0; font-size: 14px; font-weight: 700; color: #111; }
        .contact-tel { font-size: 13px; color: #333; font-weight: 500; }
        .contact-icon i { font-size: 20px; color: #1d71b8; cursor: pointer; }
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

            <section class="section-2 row row-eq-height">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="card h-100" style="min-height: 422px;">
                        <div class="card-header">
                            <h5>ความก้าวหน้าการเรียนของฉัน</h5>
                        </div>
                        <div class="card-body">
                            <div class="progress-split-layout">
                                <div class="progress-split-left">
                                    <div class="progress-circle-block" id="main-progress-block" data-percent="56">
                                    <svg class="progress-circle-svg" viewBox="0 0 100 100">
                                        <circle class="progress-circle-bg" cx="50" cy="50" r="45"></circle>
                                        <circle class="progress-circle-value" id="main-progress-value" cx="50" cy="50" r="45" stroke-dasharray="282.7"></circle>
                                    </svg>
                                    <div class="progress-circle-text">
                                        <span class="progress-circle-pct" id="main-progress-text">0%</span>
                                        <span class="progress-circle-label">ความคืบหน้า</span>
                                    </div>
                                </div>
                                </div>

                                <div class="progress-split-right">
                                    <ul class="progress-status-list">
                                        <li class="status-item">
                                            <div class="status-dot-title"><span class="status-dot green"></span>ความปลอดภัย (Safety)</div>
                                            <span class="status-result-badge"><span class="bold-text">100%</span> <span class="text-green">ผ่าน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span class="status-dot orange"></span>คุณภาพ (Quality)</div>
                                            <span class="status-result-badge"><span class="bold-text">75%</span> <span class="text-orange">กำลังเรียน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span class="status-dot orange"></span>การปฏิบัติงานเครื่องจักร</div>
                                            <span class="status-result-badge"><span class="bold-text">40%</span> <span class="text-orange">กำลังเรียน</span></span>
                                        </li>
                                        <li class="status-item">
                                            <div class="status-dot-title"><span class="status-dot grey"></span>การบำรุงรักษาเบื้องต้น (PM)</div>
                                            <span class="status-result-badge"><span class="bold-text">0%</span> <span class="text-grey">ยังไม่เริ่ม</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footers"><a href="#" class="btn-footer-blues">ดูรายละเอียดทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card h-100" style="min-height: 422px;">
                        <div class="card-header">
                            <h5>สำหรับพนักงานใหม่ <span style="font-size: 14px; font-weight: 400; color: #555;">(ทดลองงาน 120 วัน)</span></h5>
                        </div>
                        <div class="card-body" style="display: flex; flex-direction: column;">
                            
                            <div class="probation-timeline">
                                <div class="timeline-step">
                                    <div class="circle-badge green">30 วัน</div>
                                    <div class="step-score text-green">8/10</div>
                                    <div class="step-pct text-green">80%</div>
                                </div>
                                <div class="timeline-step">
                                    <div class="circle-badge yellow">60 วัน</div>
                                    <div class="step-score text-yellow">6/10</div>
                                    <div class="step-pct text-yellow">60%</div>
                                </div>
                                <div class="timeline-step">
                                    <div class="circle-badge">90 วัน</div>
                                    <div class="step-score" style="color: #333;">2/10</div>
                                    <div class="step-pct" style="color: #333;">20%</div>
                                </div>
                                <div class="timeline-step">
                                    <div class="circle-badge">120 วัน</div>
                                    <div class="step-score" style="color: #333;">-</div>
                                    <div class="step-empty">ยังไม่ถึงเวลา</div>
                                </div>
                            </div>

                            <div class="probation-alert">
                                <i class="fa-solid fa-circle-plus"></i>
                                <div class="probation-alert-text">
                                    <span>คุณอยู่ในช่วง 30 วันแรก (01 ม.ค. 2567 - 30 ม.ค. 2567)</span>
                                    <span>กรุณาเรียนให้ครบตามแผนเพื่อผ่านการประเมินในแต่ละรอบ</span>
                                </div>
                            </div>

                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card h-100" style="min-height: 380px;">
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
            
            <div class="bottom-card-group">
                <section class="section-3 row row-eq-height">
                    
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5>หลักสูตรที่ต้องเรียนต่อ <span class="badge-danger-circle">6</span></h5>
                            </div>
                            <div class="card-body">
                                
                                <div class="course-row-item border-blue">
                                    <div class="course-info">
                                        <h5>การตั้งค่าเครื่องจักรเบื้องต้น</h5>
                                        <span>Machine Setup Basics</span>
                                    </div>
                                    <div class="course-progress-area">
                                        <div class="mini-progress"><div class="mini-progress-bar blue" style="width: 80%;"></div></div>
                                        <span class="progress-text">80%</span>
                                    </div>
                                    <a href="#" class="btn-outline-blue-sm">เรียนต่อ</a>
                                </div>

                                <div class="course-row-item border-blue">
                                    <div class="course-info">
                                        <h5>การควบคุมคุณภาพในการผลิต</h5>
                                        <span>In-process Quality Control</span>
                                    </div>
                                    <div class="course-progress-area">
                                        <div class="mini-progress"><div class="mini-progress-bar blue" style="width: 40%;"></div></div>
                                        <span class="progress-text">40%</span>
                                    </div>
                                    <a href="#" class="btn-outline-blue-sm">เรียนต่อ</a>
                                </div>

                                <div class="course-row-item border-blue">
                                    <div class="course-info">
                                        <h5>การตรวจสอบ 5 ส</h5>
                                        <span>5S Inspection</span>
                                    </div>
                                    <div class="course-progress-area">
                                        <div class="mini-progress"><div class="mini-progress-bar" style="width: 0%;"></div></div>
                                        <span class="progress-text">0%</span>
                                    </div>
                                    <a href="#" class="btn-outline-blue-sm">เรียนต่อ</a>
                                </div>
                            </div>
                                <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                            </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5>หลักสูตรที่ไม่ผ่าน / ต้องซ่อม <span class="badge-danger-circle">2</span></h5>
                                <a href="#">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                
                                <div class="course-row-item border-red">
                                    <div class="course-info">
                                        <h5>ความปลอดภัยในการทำงาน</h5>
                                        <span>Safety at Work</span>
                                    </div>
                                    <div class="course-progress-area" style="justify-content: flex-end;">
                                        <span style="font-size: 12px; color: #555;">คะแนน</span>
                                        <span class="progress-text" style="width: auto;">65%</span>
                                    </div>
                                    <a href="#" class="btn-outline-red-sm">ซ่อม</a>
                                </div>

                                <div class="course-row-item border-red">
                                    <div class="course-info">
                                        <h5>ความรู้พื้นฐานคุณภาพ</h5>
                                        <span>Quality Basics</span>
                                    </div>
                                    <div class="course-progress-area" style="justify-content: flex-end;">
                                        <span style="font-size: 12px; color: #555;">คะแนน</span>
                                        <span class="progress-text" style="width: auto;">70%</span>
                                    </div>
                                    <a href="#" class="btn-outline-red-sm">ซ่อม</a>
                                </div>
                            </div>
                                    <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5>ผลประเมินล่าสุด</h5>
                                <a href="#">ดูทั้งหมด</a>
                            </div>
                            <div class="card-body">
                                
                                <div class="eval-row-item">
                                    <div class="eval-info">
                                        <i class="fa-solid fa-circle-check text-green"></i>
                                        <div class="text-group">
                                            <h5>การตรวจสอบ 5 ส</h5>
                                            <span>5S Inspection</span>
                                            <span>วันที่สอบ: 10/05/2024</span>
                                        </div>
                                    </div>
                                    <div class="eval-score-box">
                                        <span>คะแนน</span>
                                        <h4 class="text-green">85%</h4>
                                    </div>
                                </div>

                                <div class="eval-row-item">
                                    <div class="eval-info">
                                        <i class="fa-solid fa-circle-xmark text-red"></i>
                                        <div class="text-group">
                                            <h5>ความปลอดภัยในการทำงาน</h5>
                                            <span>Safety at Work</span>
                                            <span>วันที่สอบ: 10/05/2024</span>
                                        </div>
                                    </div>
                                    <div class="eval-score-box">
                                        <span>คะแนน</span>
                                        <h4 class="text-red" style="font-size: 16px;">ไม่ผ่าน</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-4 row row-eq-height" style="margin-top: 8px;">
                
                <div class="col-lg-4 col-md-12 col-12 mb-3">
                    <div class="card h-40" style="border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: none;">
                        <div class="card-header" style="background: transparent; border-bottom: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                            <h5 style="margin: 0; font-size: 18px; font-weight: 500;">ประกาศจากบริษัท</h5>
                            <a href="#" style="font-size: 13px; text-decoration: none;">ดูทั้งหมด</a>
                        </div>
                        <div class="card-body">
                            
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; font-weight: bold;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 75%;">
                                    <i class="fa-solid fa-bullhorn" style="color: #1d71b8; font-size: 20px; flex-shrink: 0;"></i>
                                    <span style="font-size: 15px; color: #3e3f42; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">แจ้งเปลี่ยนแปลงเวลาอบรม Safety Training ประจำเดือน พ.ค. 2567</span>
                                </div>
                                <span style="font-size: 13px; color: #777; white-space: nowrap; flex-shrink: 0;">08 พ.ค. 67</span>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; font-weight: bold;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 75%;">
                                    <i class="fa-solid fa-bullhorn" style="color: #1d71b8; font-size: 18px; flex-shrink: 0;"></i>
                                    <span style="font-size: 15px; color: #3e3f42; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">ขอเชิญเข้าร่วมกิจกรรม 5ส Big Cleaning Day</span>
                                </div>
                                <span style="font-size: 13px; color: #777; white-space: nowrap; flex-shrink: 0;">05 พ.ค. 67</span>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; font-weight: bold;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 75%;">
                                    <i class="fa-solid fa-bullhorn" style="color: #1d71b8; font-size: 18px; flex-shrink: 0;"></i>
                                    <span style="font-size: 15px; color: #3e3f42; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">อัปเดตเอกสาร Work Instruction Line 1</span>
                                </div>
                                <span style="font-size: 13px; color: #777; white-space: nowrap; flex-shrink: 0;">02 พ.ค. 67</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card h-40" style="border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: none;">
                        <div class="card-header" style="background: transparent; border-bottom: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                            <h5 style="margin: 0; font-size: 18px; font-weight: 500;">ประวัติการเรียนล่าสุด</h5>
                            <a href="#" style="font-size: 13px; text-decoration: none;">ดูทั้งหมด</a>
                        </div>
                        <div class="card-body">
                            
                            <div style="display: flex; align-items: center; margin-bottom: 30px;">
                                <div style="display: flex; align-items: center; gap: 10px; width: 45%; flex-shrink: 0;">
                                    <i class="fa-solid fa-circle-check" style="color: #2ecc71; font-size: 18px;"></i>
                                    <h6 style="margin: 0; font-size: 13px; font-weight: 600; color: #111;">GMP Refresher Training</h6>
                                </div>
                                <div style="flex: 1; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-size: 12px; color: #777; width: 33%; text-align: center; font-weight:700;">เรียนจบ</span>
                                    <span style="font-size: 12px; color: #777; width: 33%; text-align: center; white-space: nowrap; font-weight:700;">10 พ.ค. 67</span>
                                    <span style="font-size: 14px; font-weight: 700; color: #111; width: 33%; text-align: right;">85%</span>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; margin-bottom: 30px;">
                                <div style="display: flex; align-items: center; gap: 10px; width: 45%; flex-shrink: 0;">
                                    <i class="fa-solid fa-circle-check" style="color: #2ecc71; font-size: 18px;"></i>
                                    <h6 style="margin: 0; font-size: 13px; font-weight: 600; color: #111;">QC Basic</h6>
                                </div>
                                <div style="flex: 1; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-size: 12px; color: #777; width: 33%; text-align: center; font-weight:700;">เรียนจบ</span>
                                    <span style="font-size: 12px; color: #777; width: 33%; text-align: center; white-space: nowrap; font-weight:700;">09 พ.ค. 67</span>
                                    <span style="font-size: 14px; font-weight: 700; color: #111; width: 33%; text-align: right;">80%</span>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; margin-bottom: 30px;">
                                <div style="display: flex; align-items: center; gap: 10px; width: 45%; flex-shrink: 0;">
                                    <i class="fa-solid fa-circle-check" style="color: #2ecc71; font-size: 18px;"></i>
                                    <h6 style="margin: 0; font-size: 13px; font-weight: 600; color: #111;">Machine Setup</h6>
                                </div>
                                <div style="flex: 1; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-size: 12px; color: #f39c12; width: 33%; text-align: center; font-weight:700;">กำลังเรียน</span>
                                    <span style="font-size: 12px; color: #777; width: 33%; text-align: center; white-space: nowrap; font-weight:700;">08 พ.ค. 67</span>
                                    <span style="font-size: 14px; font-weight: 700; color: #111; width: 33%; text-align: right;">60%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card h-40" style="border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: none;">
                        <div class="card-header" style="background: transparent; border-bottom: 1px solid #f0f0f0;">
                            <h5 style="margin: 0; font-size: 18px; font-weight: 500;">ติดต่อ / บุคคลที่เกี่ยวข้อง</h5>
                        </div>
                        <div class="card-body">
                            
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 60%;">
                                    <img src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="profile" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; flex-shrink: 0;">
                                    <div>
                                        <span style="display: block; font-size: 11px; color: #777;font-weight: 700;">หัวหน้างาน</span>
                                        <h6 style="margin: 0; font-size: 13px; font-weight: 700; color: #111;">คุณสมชาย ใจดี</h6>
                                    </div>
                                </div>
                                <div style="font-size: 12px; color: #333; font-weight: 600; white-space: nowrap;">02-123-4567</div>
                                <div><a href="#"><i class="fa-regular fa-comment-dots" style="font-size: 20px; color: #1d71b8;"></i></a></div>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 60%;">
                                    <img src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="profile" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; flex-shrink: 0;">
                                    <div>
                                        <span style="display: block; font-size: 11px; color: #777;">ผู้ประสานงานการอบรม</span>
                                        <h6 style="margin: 0; font-size: 13px; font-weight: 700; color: #111;">คุณวิภา รักการอบรม</h6>
                                    </div>
                                </div>
                                <div style="font-size: 12px; color: #444343; font-weight: 600; white-space: nowrap;">02-234-5678</div>
                                <div><a href="#"><i class="fa-regular fa-comment-dots" style="font-size: 20px; color: #1d71b8;"></i></a></div>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                <div style="display: flex; align-items: center; gap: 12px; width: 60%;">
                                    <img src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="profile" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; flex-shrink: 0;">
                                    <div>
                                        <span style="display: block; font-size: 11px; color: #777;">ฝ่าย HR</span>
                                        <h6 style="margin: 0; font-size: 13px; font-weight: 700; color: #111;">คุณมณิวรรณ สุขใจ</h6>
                                    </div>
                                </div>
                                <div style="font-size: 12px; color: #333; font-weight: 600; white-space: nowrap;">02-345-6789</div>
                                <div><a href="#"><i class="fa-regular fa-comment-dots" style="font-size: 20px; color: #1d71b8;"></i></a></div>
                            </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var block = $('#main-progress-block');
            var percent = parseInt(block.attr('data-percent')) || 0; 
            var circumference = 282.74;           
            var offset = circumference - (percent / 100) * circumference;           
            $('#main-progress-value').css({
                'stroke-dashoffset': circumference,
                'transition': 'stroke-dashoffset 1.5s ease-out'
            });
            setTimeout(function() {
                $('#main-progress-value').css('stroke-dashoffset', offset);
                
                $({ counter: 0 }).animate({ counter: percent }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function() {
                        $('#main-progress-text').text(Math.ceil(this.counter) + '%');
                    }
                });
            }, 200); 
        });
    </script>
</body>

</html>

