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
        padding: 10px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        gap: 10px;

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

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

        .card-footer {
            display: flex;
            justify-content: center;
            align-items: center;

            a {
                color: #337ab7;
            }
        }
    }


    .row>div {
        margin-bottom: 20px;
    }

    section {
        margin-bottom: 20px;
    }

    .section-1 {}

    .section-2 {}

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