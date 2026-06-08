<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<style>
    @font-face {
        font-family: 'SupermarketCustom';
        src: url('./assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype'); 
        font-weight: normal;
        font-style: normal;
    }

    body, html { overflow-x: hidden; }
    body {
        font-family: 'SupermarketCustom', sans-serif;
        background-color: #f6f8fb;
    }

    p { margin-bottom: 0; }
    a { color: #000000; text-decoration: none !important; }

    .h-100 { height: 100%; }
    .row-eq-height { display: flex; flex-wrap: wrap; }
    .row > div { padding-left: 5px; padding-right: 5px; margin-bottom: 6px; }
    section { margin-bottom: 5px; }

    @media (max-width: 767px) { .row-eq-height { display: block; } }
    .row-eq-height > [class*='col-'] { display: flex; flex-direction: column; }

    .card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        border: 1px solid #eef2f5;
        display: flex;
        flex-direction: column;
        width: 100%;
        flex: 1; 
    }

    .card .card-header {
        background-color: transparent;
        border-bottom: none;
        padding: 0 0 15px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card .card-header h5 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
        color: #111111;
    }

    .card .card-header .sub-text {
        font-size: 13px;
        color: #777;
    }

    .card .card-body {
        padding: 0;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .card .card-footer {
        background-color: transparent;
        border-top: none;
        padding: 15px 0 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: auto;
    }

    .card .card-footer a.btn-outline-purple {
        border: 1px solid #c2b5f7;
        background-color: #ffffff;
        color: #6b4ce6;
        text-align: center;
        padding: 6px 24px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
    }

    .card .card-footer a.btn-outline-purple:hover {
        background-color: #6b4ce6;
        color: #ffffff !important;
        box-shadow: 0 4px 10px rgba(107, 76, 230, 0.2);
    }

    .section-1 {
        @media (min-width: 1200px) { .custom-5-col { width: 20%; } }

        .card-stat {
            flex-direction: row;
            align-items: center;
            padding: 15px 20px;
            gap: 15px;
            min-height: 105px;
            line-height:1.9;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            gap: 2px;
        }

        .stat-title {
            font-size: 15px;
            font-weight: 600;
            color: #333;
        }
         .stat-title2 {
            font-size: 15px;
            font-weight: 600;
            color: #2e7d32;
        }
          .stat-title3 {
            font-size: 15px;
            font-weight: 600;
            color: #1565c0;
        }
           .stat-title4 {
            font-size: 15px;
            font-weight: 600;
            color: #e67e22;
        }

        .stat-value-row { display: flex; align-items: baseline; gap: 8px; }
        .stat-qty { font-size: 24px; font-weight: bold; color: #111; line-height: 1.3; }
        .stat-qty2 { font-size: 24px; font-weight: bold; color: #2e7d32; line-height: 1.3; }
        .stat-qty3 { font-size: 24px; font-weight: bold; color: #1565c0; line-height: 1.3; }
        .stat-qty4 { font-size: 24px; font-weight: bold; color: #e67e22; line-height: 1.3; }
        .stat-qty5 { font-size: 24px; font-weight: bold; color: #c62828; line-height: 1.3; }

        .stat-unit { font-size: 13px; color: #333; font-weight: 600; }
        
        .stat-trend { font-size: 12px; font-weight: 700; margin-top: 4px; }
        .text-up { color: #2ecc71; }
        .text-down { color: #e74c3c; }
        .trend-desc { color: #777; font-weight: 600; }

        .color-purple .stat-icon { background-color: #f3e5f5; color: #4b0082; }
        .color-green .stat-icon { background-color: #e8f5e9; color: #2e7d32; }
        .color-blue .stat-icon { background-color: #e3f2fd; color: #1565c0; }
        .color-orange .stat-icon { background-color: #fff3e0; color: #e67e22; }
        .color-red .stat-icon { background-color: #ffebee; color: #c62828; }

    }

    .section-2{
    .completion-rate-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
        width: 100%;
        padding: 5px 0;
        margin-top:10px;
    }
    .cr-row {
        display: flex;
        align-items: center;
        width: 100%;
                line-height: 1.9;

    }
    .cr-label {
        width: 80px;
        font-size: 13px;
        font-weight: 700;
        color: #333;
        line-height: 1.2;
        flex-shrink: 0;
    }
    .cr-sub-label {
        font-size: 10px;
        color: #777;
        font-weight: 600;
    }
    .cr-bar-container {
        flex: 1;
        background-color: transparent;
        margin: 0 15px 0 5px;
        display: flex;
        align-items: center;
    }
    .cr-bar {
        height: 8px;
        background-color: #5c3ab6; 
        border-radius: 4px;
        transition: width 1s ease-in-out;
    }
    .cr-pct {
        width: 35px;
        font-size: 14px;
        font-weight: 800;
        color: #111;
        margin-left: 8px; 
        flex-shrink: 0;
    }
    .cr-trend {
        width: 45px;
        font-size: 12px;
        font-weight: 700;
        text-align: right;
        flex-shrink: 0;
        margin-left: 10px;
    }
    .cr-axis-row {
        display: flex;
        align-items: center;
        width: 100%;
        margin-top: -5px;
    }
    .cr-axis-labels {
        flex: 1;
        display: flex;
        justify-content: space-between;
        margin: 0 15px 0 5px;
        color: #555;
        font-size: 13px;
        font-weight: 700;
    }
    .text-up { color: #2ecc71; }
    .text-down { color: #e74c3c; }

 
    .donut-chart-layout {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        gap: 20px;
        padding: 5px 0;
    }
    
    .donut-chart-wrapper {
        position: relative;
        width: 200px; 
        height: 200px;
        flex-shrink: 0;
    }

    .donut-center-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .donut-center-text .pct {
        font-size: 30px;
        font-weight: bold;
        color: #111;
        line-height: 1;
    }

    .donut-center-text .label {
        font-size: 14px;
        color: #111;
        font-weight: 700;
        margin-top: 4px;
    }

    .custom-donut-legend {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .legend-item-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
        font-weight: 700;
        color: #333;
        margin-top: 8px;
    }

    .leg-left {
        display: flex;
        align-items: center;
        gap: 13px;
    }

    .leg-color {
        width: 12px;
        height: 12px;
        border-radius: 4px;
        display: inline-block;
    }

    .leg-right {
        font-weight: bold;
        color: #111;
    }
    .top5-list {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-top: 10px;
    }

    .top5-item {
        display: flex;
        align-items: center;
        font-size: 14px; 
        font-weight: 500; 
        color: #333;
        padding: 12px 0; 
        border-bottom: 1px solid #f0f0f0; 
    }

  
    .top5-item:last-child {
        border-bottom: none;
    }

    .top5-rank { 
        width: 30px; 
        text-align: center; 
        font-weight: bold; 
        margin-right: 15px; 
    }

    .top5-name { 
        flex: 1; 
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        padding-right: 10px;
    }

    .top5-status { 
        width: 60px; 
        text-align: right; 
        color: #333; 
        font-weight: 500; 
        font-size: 15px;
    }

    .top5-count { 
        width: 60px; 
        text-align: right; 
        font-weight: bold; 
        font-size: 14px;
    }
}

.section-3 {  
    .heatmap-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 15px;
        padding: 5px 0;
    }
    
    .heatmap-grid {
        display: grid;
        grid-template-columns: 40px repeat(6, 1fr);
        gap: 2px; 
    }

    .hm-header {
        font-size: 12px;
        font-weight: 700;
        color: #333;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        padding-bottom: 5px;
        line-height: 1.1;
    }

    .hm-row-label {
        font-size: 12px;
        font-weight: 700;
        color: #333;
        display: flex;
        align-items: center;
    }

    .hm-cell {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 12px;
        font-weight: 700;
        color: #333;
        padding: 6px 0;
    }

    .bg-hm-red { background-color: #ef4444; color: #fff; }   
    .bg-hm-yellow { background-color: #fbbf24; color: #111; } 
    .bg-hm-green { background-color: #4ade80; color: #111; }  

    .heatmap-legend {
        display: flex;
        justify-content: center;
        gap: 55px;
        font-size: 12px;
        font-weight: 600;
        color: #555;
    }

    .hm-leg-item {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .hm-leg-box {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    .team-gap-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 5px;
    }
    .team-gap-header {
        display: flex;
        justify-content: space-between;
        font-size: 11px;
        color: #777;
        font-weight: 600;
        padding-bottom: 5px;
    }
    .team-gap-item {
        display: flex;
        align-items: center;
        font-size: 13px;
        font-weight: 600;
        line-height:2.3;
    }
    .gap-rank { width: 40px; text-align: center; }
    .gap-team { width: 100px; }
    .gap-bar-wrap { flex: 1; background-color: #eef2f5; height: 6px; border-radius: 4px; margin: 0 15px; overflow: hidden; }
    .gap-bar-fill { height: 100%; background-color: #20863f; border-radius: 4px; }
    .gap-pct { width: 40px; text-align: right; }


    .donut-chart-layout {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        gap: 20px;
        padding: 5px 0;
        margin-top: 8px;
        line-height: 2.5;

    }
    
    .donut-chart-wrapper {
        position: relative;
        width: 200px;
        height: 200px;
        flex-shrink: 0;
    }

    .donut-center-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .donut-center-text .pct {
        font-size: 26px;
        font-weight: bold;
        color: #111;
        line-height: 1;
    }

    .donut-center-text .label {
        font-size: 11px;
        color: #111;
        font-weight: 700;
        margin-top: 4px;
    }

    .donut-center-text.text-sm .label {
        font-size: 15px;
        font-weight: 800;
        color: #111;
        line-height: 1.2;
        margin: 0;
    }

    .custom-donut-legend {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .legend-item-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        font-weight: 700;
        color: #333;
    }

    .leg-left { display: flex; align-items: center; gap: 10px; }
    .leg-color { width: 12px; height: 12px; border-radius: 4px; display: inline-block; }
    .leg-right { font-weight: bold; color: #111; }

    .employee-legend .leg-right {
        display: flex;
        gap: 5px;
        justify-content: flex-end;
        width: 80px; 
    }
    .employee-legend .leg-count { font-weight: bold; color: #111; width: 40px; text-align: right; }
    .employee-legend .leg-pct { color: #777; font-weight: 600; width: 35px; text-align: right; }
}

.section-4{
    .line-chart-layout {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        padding: 5px 0;
    }
    
    .line-chart-legend {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 200px;
        margin-bottom: 20px;
    }

    .line-chart-legend .leg-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        color: #333;
    }

    .line-chart-legend .leg-color {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
    }

    .line-chart-wrapper {
        position: relative;
        flex: 1;
        width: 100%;
        min-height: 250px;
    }


    .table-responsive {
        width: 100%;
        overflow-x: auto; 
    }

    .dept-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .dept-table th {
        padding: 10px 5px;
        font-size: 14px;
        font-weight: 700;
        color: #111;
        text-align: center;
        border-bottom: 1px solid #f0f0f0;
        white-space: nowrap;
    }

    .dept-table th:first-child {
        text-align: left; 
    }

    .dept-table td {
        padding: 12px 5px;
        font-size: 14px;
        font-weight: 700;
        color: #333;
        text-align: center;
        border-bottom: 1px solid #f0f0f0;
        white-space: nowrap;
    }

    .dept-table td:first-child {
        text-align: left;
        color: #111;
    }

    .dept-table tr:last-child td {
        border-bottom: none; 
    }

    .trend-up { color: #2ecc71; font-size: 12px; margin-left: 8px; font-weight: 800; display: inline-block; width: 30px; text-align: left;}
    .trend-down { color: #e74c3c; font-size: 12px; margin-left: 8px; font-weight: 800; display: inline-block; width: 30px; text-align: left;}
    .trend-dash { color: #999; font-size: 12px; margin-left: 8px; font-weight: 800; display: inline-block; width: 30px; text-align: center;}

    .btn-table-outline {
        border: 1px solid #c2b5f7;
        color: #6b4ce6;
        background: #ffffff;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: bold;
        text-decoration: none !important;
        display: inline-block;
        transition: 0.2s;
    }

    .btn-table-outline:hover {
        background: #f0edff;
    }
}
</style>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Overview Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="main-content">
        <div class="container-fluid p-5">
            
            <section class="section-1 row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-purple">
                        <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">พนักงานทั้งหมด</div>
                            <div class="stat-value-row">
                                <span class="stat-qty">512</span><span class="stat-unit">คน</span>
                            </div>
                            <div class="stat-trend">
                                <span class="text-up"><i class="fa-solid fa-caret-up"></i> 8</span> <span class="trend-desc">จากช่วงก่อนหน้า</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-green">
                        <div class="stat-icon"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="stat-content">
                            <div class="stat-title2">Completion Rate</div>
                            <div class="stat-value-row">
                                <span class="stat-qty2">78%</span>
                            </div>
                            <div class="stat-trend">
                                <span class="text-up"><i class="fa-solid fa-caret-up"></i> 6%</span> <span class="trend-desc">จากช่วงก่อนหน้า</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-blue">
                        <div class="stat-icon"><i class="fa-solid fa-medal"></i></div>
                        <div class="stat-content">
                            <div class="stat-title3">Pass Rate</div>
                            <div class="stat-value-row">
                                <span class="stat-qty3">72%</span>
                            </div>
                            <div class="stat-trend">
                                <span class="text-up"><i class="fa-solid fa-caret-up"></i> 4%</span> <span class="trend-desc">จากช่วงก่อนหน้า</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-orange">
                        <div class="stat-icon"><i class="fa-solid fa-clock"></i></div>
                        <div class="stat-content">
                            <div class="stat-title4">Course Overdue</div>
                            <div class="stat-value-row">
                                <span class="stat-qty4">34</span><span class="stat-unit">หลักสูตร</span>
                            </div>
                            <div class="stat-trend">
                                <span class="text-up"><i class="fa-solid fa-caret-up"></i> 5</span> <span class="trend-desc">หลักสูตร</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 custom-5-col">
                    <div class="card card-stat color-red">
                        <div class="stat-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                        <div class="stat-content">
                            <div class="stat-title">ต้องสอบซ่อม</div>
                            <div class="stat-value-row">
                                <span class="stat-qty5">28</span><span class="stat-unit">คน</span>
                            </div>
                            <div class="stat-trend">
                                <span class="text-up"><i class="fa-solid fa-caret-up"></i> 7</span> <span class="trend-desc">คน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-2 row row-eq-height">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>Completion Rate ของแต่ละ Line</h5>
                        </div>
                        
                     <div class="completion-rate-list">
                                <div class="cr-row">
                                    <div class="cr-label">Line 1</div>
                                    <div class="cr-bar-container">
                                        <div class="cr-bar" style="width: 85%;"></div>
                                        <div class="cr-pct">85%</div> </div>
                                    <div class="cr-trend text-up"><i class="fa-solid fa-caret-up"></i> 5%</div>
                                </div>
                                <div class="cr-row">
                                    <div class="cr-label">Line 2</div>
                                    <div class="cr-bar-container">
                                        <div class="cr-bar" style="width: 70%;"></div>
                                        <div class="cr-pct">70%</div>
                                    </div>
                                    <div class="cr-trend text-down"><i class="fa-solid fa-caret-down"></i> 2%</div>
                                </div>
                                <div class="cr-row">
                                    <div class="cr-label">Line 3</div>
                                    <div class="cr-bar-container">
                                        <div class="cr-bar" style="width: 72%;"></div>
                                        <div class="cr-pct">72%</div>
                                    </div>
                                    <div class="cr-trend text-up"><i class="fa-solid fa-caret-up"></i> 4%</div>
                                </div>
                                <div class="cr-row">
                                    <div class="cr-label">Line 4</div>
                                    <div class="cr-bar-container">
                                        <div class="cr-bar" style="width: 70%;"></div>
                                        <div class="cr-pct">70%</div>
                                    </div>
                                    <div class="cr-trend text-up"><i class="fa-solid fa-caret-up"></i> 1%</div>
                                </div>
                                <div class="cr-row" style="margin-bottom: 5px;">
                                    <div class="cr-label">Line 5<br><span class="cr-sub-label">(Headquarter)</span></div>
                                    <div class="cr-bar-container">
                                        <div class="cr-bar" style="width: 40%;"></div>
                                        <div class="cr-pct">40%</div>
                                    </div>
                                    <div class="cr-trend text-down"><i class="fa-solid fa-caret-down"></i> 3%</div>
                                </div>
                                
                                <div class="cr-axis-row">
                                    <div style="width: 80px; flex-shrink: 0;"></div>
                                    <div class="cr-axis-labels">
                                        <span>0%</span>
                                        <span>25%</span>
                                        <span>50%</span>
                                        <span>75%</span>
                                        <span>100%</span>
                                    </div>
                                    <div style="width: 90px; flex-shrink: 0;"></div>
                                </div>
                            </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>Pass Rate ของแต่ละ Section</h5>
                        </div>
                        <div class="donut-chart-layout">
                                <div class="donut-chart-wrapper">
                                    <canvas id="passRateChart"></canvas>
                                    <div class="donut-center-text">
                                        <span class="pct">72%</span>
                                        <span class="label">Pass Rate</span>
                                    </div>
                                </div>

                                <div class="custom-donut-legend">
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#3b82f6;"></span> Raw material</div>
                                        <div class="leg-right">75%</div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#ef4444;"></span> Blowing</div>
                                        <div class="leg-right">72%</div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#f59e0b;"></span> Mixing</div>
                                        <div class="leg-right">78%</div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#6366f1;"></span> Filling</div>
                                        <div class="leg-right">73%</div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#14b8a6;"></span> Packing</div>
                                        <div class="leg-right">70%</div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#0d9488;"></span> Packaging material</div>
                                        <div class="leg-right">68%</div>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>Top 5 หลักสูตรที่ไม่ผ่านมากที่สุด</h5>
                            <span class="sub-text">จำนวนผู้ไม่ผ่าน</span>
                        </div>
                        <div class="card-body">
                            <div class="top5-list">
                                <div class="top5-item">
                                    <span class="top5-rank">1</span>
                                    <span class="top5-name">ความปลอดภัยในการทำงาน</span>
                                    <span class="top5-status">ไม่ผ่าน</span>
                                    <span class="top5-count">18 คน</span>
                                </div>
                                <div class="top5-item">
                                    <span class="top5-rank">2</span>
                                    <span class="top5-name">การควบคุมคุณภาพในกระบวนการผลิต</span>
                                    <span class="top5-status">ไม่ผ่าน</span>
                                    <span class="top5-count">15 คน</span>
                                </div>
                                <div class="top5-item">
                                    <span class="top5-rank">3</span>
                                    <span class="top5-name">การบำรุงรักษาเบื้องต้น</span>
                                    <span class="top5-status">ไม่ผ่าน</span>
                                    <span class="top5-count">12 คน</span>
                                </div>
                                <div class="top5-item">
                                    <span class="top5-rank">4</span>
                                    <span class="top5-name">การตั้งค่าเครื่องจักรเบื้องต้น</span>
                                    <span class="top5-status">ไม่ผ่าน</span>
                                    <span class="top5-count">10 คน</span>
                                </div>
                                <div class="top5-item">
                                    <span class="top5-rank">5</span>
                                    <span class="top5-name">5 ส ในการปฏิบัติงาน</span>
                                    <span class="top5-status">ไม่ผ่าน</span>
                                    <span class="top5-count">9 คน</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>
            </section>

            <section class="section-3 row row-eq-height">
                <div class="col-lg-4 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>Skill Gap Heatmap (ภาพรวมทุกตำแหน่ง)</h5>
                        </div>
                        <div class="heatmap-container">
                            <div class="heatmap-grid">
                                <div></div> <div class="hm-header">Safety</div>
                                    <div class="hm-header">Quality</div>
                                    <div class="hm-header"><span>Machine</span><span>Operation</span></div>
                                    <div class="hm-header">PM</div>
                                    <div class="hm-header">5S</div>
                                    <div class="hm-header"><span>Problem</span><span>Solving</span></div>

                                    <div class="hm-row-label">Line 1</div>
                                    <div class="hm-cell bg-hm-red">45%</div>
                                    <div class="hm-cell bg-hm-yellow">65%</div>
                                    <div class="hm-cell bg-hm-red">35%</div>
                                    <div class="hm-cell bg-hm-green">80%</div>
                                    <div class="hm-cell bg-hm-red">30%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>

                                    <div class="hm-row-label">Line 2</div>
                                    <div class="hm-cell bg-hm-green">75%</div>
                                    <div class="hm-cell bg-hm-green">80%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>
                                    <div class="hm-cell bg-hm-yellow">65%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>
                                    <div class="hm-cell bg-hm-green">70%</div>

                                    <div class="hm-row-label">Line 3</div>
                                    <div class="hm-cell bg-hm-red">50%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>
                                    <div class="hm-cell bg-hm-red">45%</div>
                                    <div class="hm-cell bg-hm-green">75%</div>
                                    <div class="hm-cell bg-hm-green">75%</div>
                                    <div class="hm-cell bg-hm-green">80%</div>

                                    <div class="hm-row-label">Line 4</div>
                                    <div class="hm-cell bg-hm-green">70%</div>
                                    <div class="hm-cell bg-hm-green">75%</div>
                                    <div class="hm-cell bg-hm-yellow">55%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>
                                    <div class="hm-cell bg-hm-red">40%</div>
                                    <div class="hm-cell bg-hm-red">45%</div>

                                    <div class="hm-row-label">Line 5</div>
                                    <div class="hm-cell bg-hm-green">80%</div>
                                    <div class="hm-cell bg-hm-green">85%</div>
                                    <div class="hm-cell bg-hm-red">35%</div>
                                    <div class="hm-cell bg-hm-red">40%</div>
                                    <div class="hm-cell bg-hm-green">75%</div>
                                    <div class="hm-cell bg-hm-yellow">60%</div>
                                </div>

                                <div class="heatmap-legend">
                                    <div class="hm-leg-item">
                                        <div class="hm-leg-box bg-hm-red"></div>
                                        <span>ต่ำ (0-49%)</span>
                                    </div>
                                    <div class="hm-leg-item">
                                        <div class="hm-leg-box bg-hm-yellow"></div>
                                        <span>ปานกลาง (50-69%)</span>
                                    </div>
                                    <div class="hm-leg-item">
                                        <div class="hm-leg-box bg-hm-green"></div>
                                        <span>ดี (70-100%)</span>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>พนักงานใหม่ (ภายใน 120 วัน)</h5>
                        </div>
                        <div class="card-body" style="justify-content: center; align-items: center;">
                            <div class="donut-chart-layout">
                                <div class="donut-chart-wrapper">
                                    <canvas id="newEmployeeChart"></canvas>
                                    <div class="donut-center-text text-sm">
                                        <span class="label">Now</span>
                                        <span class="label">Employee</span>
                                        <span class="label">Progress</span>
                                    </div>
                                </div>

                                <div class="custom-donut-legend employee-legend">
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#6b4ce6;"></span> ครบ 30 วัน</div>
                                        <div class="leg-right">
                                            <span class="leg-count">42 คน</span>
                                            <span class="leg-pct">(85%)</span>
                                        </div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#f87171;"></span> ครบ 60 วัน</div>
                                        <div class="leg-right">
                                            <span class="leg-count">38 คน</span>
                                            <span class="leg-pct">(76%)</span>
                                        </div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#60a5fa;"></span> ครบ 90 วัน</div>
                                        <div class="leg-right">
                                            <span class="leg-count">26 คน</span>
                                            <span class="leg-pct">(64%)</span>
                                        </div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#2dd4bf;"></span> ครบ 120 วัน</div>
                                        <div class="leg-right">
                                            <span class="leg-count">22 คน</span>
                                            <span class="leg-pct">(54%)</span>
                                        </div>
                                    </div>
                                    <div class="legend-item-row">
                                        <div class="leg-left"><span class="leg-color" style="background:#059669;"></span> เกิน 120 วัน</div>
                                        <div class="leg-right">
                                            <span class="leg-count">22 คน</span>
                                            <span class="leg-pct">(44%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>Team ที่มี Skill Gap สูงสุด</h5>
                        </div>
                        <div class="card-body">
                            <div class="team-gap-list">
                                <div class="team-gap-header">
                                    <span style="width:40px; text-align:center;">Rank</span>
                                    <span style="width:100px;">Team</span>
                                    <span style="flex:1; text-align:right;">Completion Rate</span>
                                </div>
                                <div class="team-gap-item">
                                    <span class="gap-rank">1</span><span class="gap-team">Line 4 - Team C</span>
                                    <div class="gap-bar-wrap"><div class="gap-bar-fill" style="width: 65%;"></div></div>
                                    <span class="gap-pct">65%</span>
                                </div>
                                <div class="team-gap-item">
                                    <span class="gap-rank">2</span><span class="gap-team">Line 3 - Team B</span>
                                    <div class="gap-bar-wrap"><div class="gap-bar-fill" style="width: 60%;"></div></div>
                                    <span class="gap-pct">60%</span>
                                </div>
                                <div class="team-gap-item">
                                    <span class="gap-rank">3</span><span class="gap-team">Line 2 - Team C</span>
                                    <div class="gap-bar-wrap"><div class="gap-bar-fill" style="width: 58%;"></div></div>
                                    <span class="gap-pct">58%</span>
                                </div>
                                <div class="team-gap-item">
                                    <span class="gap-rank">4</span><span class="gap-team">Line 4 - Team B</span>
                                    <div class="gap-bar-wrap"><div class="gap-bar-fill" style="width: 55%;"></div></div>
                                    <span class="gap-pct">55%</span>
                                </div>
                                <div class="team-gap-item">
                                    <span class="gap-rank">5</span><span class="gap-team">Line 5 - Team A</span>
                                    <div class="gap-bar-wrap"><div class="gap-bar-fill" style="width: 50%;"></div></div>
                                    <span class="gap-pct">50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>
            </section>

            <section class="section-4 row row-eq-height">
                <div class="col-lg-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>เปรียบเทียบผลการเรียนรู้ระหว่างแผนก (Department Comparison)</h5>
                        </div>
                        <div class="table-responsive">
                                <table class="dept-table">
                                    <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>พนักงาน (คน)</th>
                                            <th>Completion Rate</th>
                                            <th>Pass Rate</th>
                                            <th>Course Overdue</th>
                                            <th>ต้องสอบซ่อม</th>
                                            <th>Skill Gap เฉลี่ย</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Production</td>
                                            <td>248</td>
                                            <td>80% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 5%</span></td>
                                            <td>74% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 4%</span></td>
                                            <td>18 <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 3</span></td>
                                            <td>12 <span class="trend-down"><i class="fa-solid fa-caret-down"></i> 1</span></td>
                                            <td>29%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                        <tr>
                                            <td>Quality Control</td>
                                            <td>64</td>
                                            <td>82% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 3%</span></td>
                                            <td>76% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 2%</span></td>
                                            <td>6 <span class="trend-dash">-</span></td>
                                            <td>5 <span class="trend-down"><i class="fa-solid fa-caret-down"></i> 1</span></td>
                                            <td>24%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                        <tr>
                                            <td>Maintenance</td>
                                            <td>48</td>
                                            <td>75% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 2%</span></td>
                                            <td>70% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 3%</span></td>
                                            <td>7 <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 1</span></td>
                                            <td>6 <span class="trend-dash">-</span></td>
                                            <td>27%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                        <tr>
                                            <td>Supply Chain</td>
                                            <td>42</td>
                                            <td>78% <span class="trend-down"><i class="fa-solid fa-caret-down"></i> 1%</span></td>
                                            <td>71% <span class="trend-down"><i class="fa-solid fa-caret-down"></i> 1%</span></td>
                                            <td>5 <span class="trend-dash">-</span></td>
                                            <td>3 <span class="trend-dash">-</span></td>
                                            <td>22%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                        <tr>
                                            <td>Engineering</td>
                                            <td>38</td>
                                            <td>79% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 6%</span></td>
                                            <td>74% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 5%</span></td>
                                            <td>4 <span class="trend-down"><i class="fa-solid fa-caret-down"></i> 1</span></td>
                                            <td>2 <span class="trend-dash">-</span></td>
                                            <td>19%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                        <tr>
                                            <td>Administration</td>
                                            <td>72</td>
                                            <td>74% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 4%</span></td>
                                            <td>69% <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 4%</span></td>
                                            <td>6 <span class="trend-dash">-</span></td>
                                            <td>4 <span class="trend-up"><i class="fa-solid fa-caret-up"></i> 1</span></td>
                                            <td>21%</td>
                                            <td><a href="#" class="btn-table-outline">ดูรายละเอียด</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                         </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5>แนวโน้มการเรียนรู้รายเดือน</h5>
                        </div>
                        <div class="line-chart-layout">
                                <div class="line-chart-legend">
                                    <div class="leg-item"><span class="leg-color" style="background:#6b4ce6;"></span> Completion Rate (%)</div>
                                    <div class="leg-item"><span class="leg-color" style="background:#3b82f6;"></span> Pass Rate (%)</div>
                                    <div class="leg-item"><span class="leg-color" style="background:#ef4444;"></span> ต้องสอบซ่อม (คน)</div>
                                </div>
                                <div class="line-chart-wrapper">
                                    <canvas id="trendLineChart"></canvas>
                                </div>
                            </div>
                        <div class="card-footer"><a href="#" class="btn-outline-purple">ดูรายละเอียด</a></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var ctx = document.getElementById('passRateChart').getContext('2d');
            var passRateChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Raw material', 'Blowing', 'Mixing', 'Filling', 'Packing', 'Packaging'],
                    datasets: [{
                        data: [1, 1, 1, 1, 1, 1], 
                        backgroundColor: [
                            '#3b82f6', 
                            '#ef4444', 
                            '#f59e0b', 
                            '#6366f1', 
                            '#14b8a6', 
                            '#fca5a5'  
                        ],
                        borderWidth: 0, 
                        hoverOffset: 4
                    }]
                },
                options: {
                    cutout: '75%', 
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false 
                        },
                        tooltip: {
                            enabled: false 
                        }
                    }
                }
            });
        });

      
        var ctxNewEmp = document.getElementById('newEmployeeChart').getContext('2d');
        var newEmployeeChart = new Chart(ctxNewEmp, {
            type: 'doughnut',
            data: {
                labels: ['ครบ 30 วัน', 'ครบ 60 วัน', 'ครบ 90 วัน', 'ครบ 120 วัน', 'เกิน 120 วัน'],
                datasets: [{
                    data: [42, 38, 26, 22, 22], 
                    backgroundColor: [
                        '#6b4ce6', 
                        '#f87171', 
                        '#60a5fa', 
                        '#2dd4bf', 
                        '#059669'  
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                cutout: '75%', 
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false 
                    },
                    tooltip: {
                        enabled: false
                    }
                }
            }
        });

        var ctxTrend = document.getElementById('trendLineChart').getContext('2d');
        var trendLineChart = new Chart(ctxTrend, {
            type: 'line',
            data: {
                labels: ['ธ.ค. 66', 'ม.ค. 67', 'ก.พ. 67', 'มี.ค. 67', 'เม.ย. 67', 'พ.ค. 67'],
                datasets: [
                    {
                        label: 'Completion Rate (%)',
                        data: [65, 67, 69, 72, 75, 78], 
                        borderColor: '#6b4ce6',
                        backgroundColor: '#6b4ce6',
                        tension: 0.1, 
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#6b4ce6'
                    },
                    {
                        label: 'Pass Rate (%)',
                        data: [60, 62, 64, 67, 69, 72], 
                        borderColor: '#3b82f6',
                        backgroundColor: '#3b82f6',
                        tension: 0.1,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#3b82f6'
                    },
                    {
                        label: 'ต้องสอบซ่อม (คน)',
                        data: [35, 32, 30, 28, 30, 28], 
                        borderColor: '#ef4444',
                        backgroundColor: '#ef4444',
                        tension: 0.1,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#ef4444'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        min: 0,
                        max: 100,
                        ticks: { stepSize: 20 },
                        grid: { color: '#f0f0f0' }
                    },
                    x: {
                        grid: { display: false },
                        offset: true 
                    }
                }
            },
            plugins: [{
                id: 'alwaysShowDataLabels',
                afterDatasetsDraw: function(chart) {
                    var ctx = chart.ctx;
                    chart.data.datasets.forEach(function(dataset, i) {
                        var meta = chart.getDatasetMeta(i);
                        if (!meta.hidden) {
                            meta.data.forEach(function(element, index) {
                                ctx.fillStyle = dataset.borderColor;
                                ctx.font = 'bold 12px "SupermarketCustom", sans-serif';
                                ctx.textAlign = 'center';
                                ctx.textBaseline = 'middle';
                                
                                var dataString = dataset.data[index].toString();
                                var yPos;
                                
                                if (i === 0) {
                                    yPos = element.y - 15;
                                    dataString += '%';
                                } else if (i === 1) {
                                    yPos = element.y + 15;
                                    dataString += '%';
                                } else {
                                    yPos = element.y + 15;
                                }
                                
                                ctx.fillText(dataString, element.x, yPos);
                            });
                            
                        }
                    });
                }
            }]
        });
    </script>
</body>
</html>