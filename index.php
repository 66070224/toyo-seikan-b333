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



</head>

<style>
    p {
        margin-bottom: 0;
    }

    a {
        color: #000000;
        text-decoration: none !important;
    }



    .card {
        border-radius: 5px;
        padding-block: 10px;
        padding-inline: 20px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        gap: 10px;
        height: 100%;
    }

    .card>.card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;


        h5 {
            margin: 0;
            font-weight: bold;
        }

        @media (width<=320px) {
            h5 {
                font-size: smaller;
            }
        }

        a {
            color: #337ab7;
        }
    }

    .card>.card-footer {
        display: flex;
        justify-content: center;
        align-items: center;

        a {
            color: #337ab7;
        }
    }

    .card>.card-body {
        margin-bottom: 10px;
    }

    .row>div {
        margin-bottom: 20px;
    }

    section {
        margin-bottom: 20px;
    }

    .section-1 {}

    .section-2 {}


    @media (width < 376px) {

        .section-3 .course-row-responsive {
            flex-direction: column !important;
            text-align: center;
            gap: 5px;
        }

        .section-3 .course-row-responsive>div {
            width: 90% !important;
        }

        .section-3 .course-row-responsive .progress {
            width: 80% !important;
        }
    }

    @media (width < 768px) {
        .card {
            padding-inline: 10px;
        }

    }

    @media (width < 1440px) {
        .section-3 .course-row-responsive .progress {
            width: 60% !important;
        }
    }


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

            <!-- SECTION 1 -->
            <section class="section-1 row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="card">TEST</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="card">TEST</div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section class="section-2 row">
                <div class="col-lg-5 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                ความก้าวหน้าการเรียนของฉัน
                            </h5>
                        </div>
                        <div class="card-body">BODY</div>
                        <div class="card-footer"><a href="" class="btn">ดูทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                แผนการเรียนของฉัน (ตามตำแหน่งงาน)
                            </h5>
                        </div>
                        <div class="card-body">BODY</div>
                        <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                บทเรียนที่ต้องเรียน / กำหนดเวลา
                            </h5>
                            <a href="">ดูทั้งหมด</a>
                        </div>
                        <div class="card-body">BODY</div>
                        <div class="card-footer"><a href="">ดูทั้งหมด</a></div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <section class="section-3 row">
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                หลักสูตรที่ต้องเรียนต่อ
                                <span class="badge" style="background-color: red; margin-left: 5px;">6</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <div class="course-row-responsive"
                                    style="padding-left: 10px; border-left: 5px solid #337ab7; display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: column; width: 50%;">
                                        <h5 style="font-weight: bold;">การตั้งค่าเครื่องจักรเบื้องต้น</h5>
                                        <span>Machine Setup Basics</span>
                                    </div>
                                    <div
                                        style="width: 25%; display: flex; flex-direction: row; justify-content: center; align-items:center; gap: 1px;">
                                        <div class="progress" style="width: 100%; height: 10px; margin: 0;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            </div>

                                        </div>
                                        <span>80%</span>
                                    </div>

                                    <div style="width: 20%; display:flex; justify-content: center;"><a href="#"
                                            class="btn btn-primary" role="button">ดูบทเรียน</a></div>
                                </div>
                                <div class="course-row-responsive"
                                    style="padding-left: 10px; border-left: 5px solid #337ab7; display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: column; width: 50%;">
                                        <h5 style="font-weight: bold;">การควบคุมคุณภาพในการผลิต</h5>
                                        <span>In-progress Quality Control</span>
                                    </div>
                                    <div
                                        style="width: 25%; display: flex; flex-direction: row; justify-content: center; align-items:center; gap: 1px;">
                                        <div class="progress" style="width: 100%; height: 10px; margin: 0;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                            </div>

                                        </div>
                                        <span>40%</span>
                                    </div>

                                    <div style="width: 20%; display:flex; justify-content: center;"><a href="#"
                                            class="btn btn-primary" role="button">ดูบทเรียน</a></div>
                                </div>
                                <div class="course-row-responsive"
                                    style="padding-left: 10px; border-left: 5px solid #337ab7; display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: column; width: 50%;">
                                        <h5 style="font-weight: bold;">การตรวจสอบ 5 ส</h5>
                                        <span>$$ Inspection</span>
                                    </div>
                                    <div
                                        style="width: 25%; display: flex; flex-direction: row; justify-content: center; align-items:center; gap: 1px;">
                                        <div class="progress" style="width: 100%; height: 10px; margin: 0;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                            </div>

                                        </div>
                                        <span>00%</span>
                                    </div>

                                    <div style="width: 20%; display:flex; justify-content: center;"><a href="#"
                                            class="btn btn-primary" role="button">ดูบทเรียน</a></div>
                                </div>
                            </div>
                        </div>
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
                        <div class="card-body">
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <div class="course-row-responsive"
                                    style="padding-left: 10px; border-left: 5px solid red; display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: column; width: 50%;">
                                        <h5 style="font-weight: bold;">ความปลอดภัยในการทำงาน</h5>
                                        <span>Safety at Work</span>
                                    </div>
                                    <div style="width: 25%;">
                                        <h5>คะแนน <span style="font-weight: bold;">65%</span></h5>
                                    </div>

                                    <div style="width: 20%; display:flex; justify-content: center;"><a href="#"
                                            class="btn" style="border: 1px solid red; color: red;"
                                            role="button">ซ่อม</a></div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 5px;">
                                    <div class="course-row-responsive"
                                        style="padding-left: 10px; border-left: 5px solid red; display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                        <div style="display: flex; flex-direction: column; width: 50%;">
                                            <h5 style="font-weight: bold;">ความรู้พื้นฐานคุณภาพ</h5>
                                            <span>Quality Basics</span>
                                        </div>
                                        <div style="width: 25%;">
                                            <h5>คะแนน <span style="font-weight: bold;">70%</span></h5>
                                        </div>

                                        <div style="width: 20%; display:flex; justify-content: center;"><a href="#"
                                                class="btn" style="border: 1px solid red; color: red;"
                                                role="button">ซ่อม</a></div>
                                    </div>

                                </div>
                            </div>

                        </div>
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
                        <div class="card-body">
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: row; gap:10px">
                                        <div style="padding-top: 10px;">
                                            <i class="fa-solid fa-circle-check fa-2xl"
                                                style="color: rgb(99, 230, 114);"></i>
                                        </div>
                                        <div style="display: flex; flex-direction: column;">
                                            <h5 style="font-weight: bold; margin: 0;">การตรวจสอบ 5 ส</h5>
                                            <span>5S Inspection</span>
                                            <span>วันที่สอบ: 10/05/2024</span>
                                        </div>
                                    </div>
                                    <div
                                        style="background:whitesmoke; text-align: center; padding-inline: 20px; padding-block: 5px;">
                                        <span>คะแนน</span>
                                        <h4 style="font-weight: bolder; color: #63e672;">85%</h4>
                                    </div>
                                </div>

                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div style="display: flex; flex-direction: row; gap:10px">
                                        <div style="padding-top: 10px;">
                                            <i class="fa-solid fa-circle-xmark fa-2xl"
                                                style="color: rgb(230, 99, 99);"></i>
                                        </div>
                                        <div style="display: flex; flex-direction: column;">
                                            <h5 style="font-weight: bold; margin: 0;">ความปลอดภัยในการทำงาน</h5>
                                            <span>Safety at Work</span>
                                            <span>วันที่สอบ: 10/05/2024</span>
                                        </div>
                                    </div>
                                    <div style="text-align: center; padding-inline: 10px; padding-block: 5px;">
                                        <span>คะแนน</span>
                                        <h4 style="font-weight: bolder; color: red;">ไม่ผ่าน</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 -->
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

<!-- 
                <div>
                    <canvas id="myChart"></canvas>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                </div> -->