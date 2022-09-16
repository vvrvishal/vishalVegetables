<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- customCss link  -->
    <link rel="stylesheet" href="../css/adminStyle.css">
    <!-- <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../boostrap/css/bootstrap.css">

    <!-- animate.js cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- owlcarousel css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iziTost css  -->
    <link rel="stylesheet" href="./node_modules/izitoast/dist/css/iziToast.min.css">

    <!-- google font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="bg-light">
    <!-- <div class="row">
        <div class="col-lg-2 col-md-3 col-12">

        </div>
    </div> -->
    <div class="mx-0 row">
        <div class="col-12 col-lg-2 col-md-3 pl-2 pr-0">
            <section class="MenuSection adminMenu bg-white my-1 pt-2 px-2 rounded" style="box-shadow: 0px 0px 6px #9d9d9d;">
                <!-- user Details  -->
                <div class="align-items-center d-flex justify-content-between py-1 userDetails">
                    <div class="d-flex">
                        <img src="../images/logo.png" alt="UserImage" class="border rounded-circle" style="width: 40px; height: 40px;">
                        <div class="UserName ml-2">
                            <p class="mb-0  textLightGray respestToUser mediumFontWeight" style="font-size: smaller;">Hello</p>
                            <h6 class="mb-0 text-dark">Vishal Gupta</h6>
                        </div>
                    </div>
                    <span class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                </div>
                <!-- totla earning  -->
                <div class="TotalEarning border-bottom my-3 pl-3" style="border-width: 2px;">
                    <p class="textLightGray mb-0 mediumFontWeight" style="font-size: smaller;">Earning</p>
                    <h4><span><i class="fa-solid fa-indian-rupee-sign"></i> </span> 12,000/-</h4>
                </div>
                <div class="menus">
                    <ul class="list-unstyled mb-0">
                        <li class=" pl-3 py-2 menuList"><span class="mr-2"><i class="fa-solid fa-braille" style="width: 25px;"></i></span>Dashboard</li>
                        <li class=" pl-3 py-2 menuList"><span class="mr-2"><i class="fa-solid fa-cubes-stacked" style="width: 25px;"></i></span>Products</li>
                        <li class=" pl-3 py-2 menuList"><span class="mr-2"><i class="fa-solid fa-basket-shopping" style="width: 25px;"></i></span>Sales</li>
                        <div class="align-items-center d-flex justify-content-between pr-3 menuList">
                            <li class=" pl-3 py-2 "><span class="mr-2"><i class="fa-solid fa-dolly" style="width: 25px;"></i></span>Orders</li>
                            <span class="badge badge-danger">4</span>
                        </div>
                        <div class="align-items-center d-flex justify-content-between pr-3 menuList">
                            <li class=" pl-3 py-2 "><span class="mr-2"><i class="fa-solid fa-chart-line" style="width: 25px;"></i></span>Analysis</li>
                            <span class="badge badge-danger">4</span>
                        </div>
                        <li class=" pl-3 py-2 menuList"><span class="mr-2"><i class="fa-solid fa-money-check-dollar" style="width: 25px;"></i></span>Payout</li>
                        <li class=" pl-3 py-2 menuList"><span class="mr-2"><i class="fa-solid fa-screwdriver-wrench" style="width: 25px;"></i></span>Setting</li>
                    </ul>
                </div>
                <div class="logo_copywrite position-absolute text-center d-none d-md-block" style="bottom: 8px;right: 20%;">
                    <img src="../images/logo.png" alt="" class="text-left" style="width: 35%;">
                    <div class="">
                        <p class=" font-weight-bold mb-0 small">@2022 Vishal Gupta</p>
                        <p class="small mb-0">All rights reserved</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-10 col-md-9 pr-1">
            <div class="bg-white mt-1 rounded" style="box-shadow: 0px 0px 6px #9d9d9d;">
                <div class="align-items-center border-bottom mb-4 mx-0 pb-3 pt-3 row" style="box-shadow: 0px 1px 6px 0px lightgrey;">
                    <div class="col-md-4 ">
                        <div class="pl-4">
                            <h4 class="mb-0">Dashboard</h4>
                            <p class="mb-0 small textLightGray">Everything here</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="align-items-center border d-flex px-2 rounded" style="box-shadow: 0px 0px 3px lightgray;">
                            <span class="textLightGray"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="search" class="border-0 form-control ml-3">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="align-items-center d-flex justify-content-end">
                            <p class="mb-0 small" style="font-weight: 600;">View Your Store</p>
                            <span class="ml-2"><i class="fa-solid fa-money-bill-trend-up"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-md-4">
                        <div class="saleReport">
                            <h5 class="mb-4">Sale Reports</h5>
                            <div class="b border p-3 rounded boxShadow">
                                <div class="d-flex">
                                    <p class='mb-0 pr-2'>Showing for : </p>
                                    <div class="" style="font-weight: 500;">

                                        <span class="mr-2"><i class="fa-solid fa-calendar-days"></i></span>
                                        <span class="firstDate">aug 24 - </span>
                                        <span class="LastDate">aug 29</span>
                                        <span class="currentYear">2022</span>
                                    </div>
                                </div>
                                <div>
                                    <canvas id="saleReportsChart" width="400" height="400"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="Earning">
                            <h5>Earning</h5>
                            <div class="py-3">
                                <canvas id="earningSaleChart" class="border p-2 w-100 boxShadow" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between statisticHeader">
                            <h6 class="mb-0 ">Statics</h6>
                            <p class="mb-0 mediumFontWeight ml-3 small text-dark"><span class="mr-2"><i class="fa-solid fa-calendar-days"></i></span> Last 30 days</p>
                        </div>
                        <div class="Order align-items-center border d-flex justify-content-around mt-3 py-3 rounded" style="box-shadow: 0px 0px 6px #aba8a8;">
                            <span class="px-2 py-1 rounded" style=" font-size: larger;     background: #b7b7b7c7;"><i class="fa-brands fa-opencart"></i></span>
                            <div class="">
                                <p class="h5 mb-0 mb-1 text-capitalize text-muted" style=" font-weight: 600;">Orders</p>
                                <div class="align-items-baseline d-flex">
                                    <h5 class="font-weight-bold">254 </h5>
                                    <span class="ml-2 small text-success" style="font-weight: 500;"><i class="fa-arrow-up fa-solid" style="margin-right: 2px;"></i>12.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="Order align-items-center border d-flex justify-content-around mt-3 py-3 rounded" style="box-shadow: 0px 0px 6px #aba8a8;">
                            <span class="px-2 py-1 rounded" style=" font-size: larger;     background: #b7b7b7c7;"><i class="fa-brands fa-opencart"></i></span>
                            <div class="">
                                <p class="mb-0 text-muted text-capitalize mb-1" style=" font-weight: 600;">revenge</p>
                                <div class="align-items-baseline d-flex">
                                    <h5 class="font-weight-bold"> <i class="fa-solid fa-sack-dollar small"></i> 6350 </h5>
                                    <span class="ml-2 small text-success" style="font-weight: 500;"><i class="fa-arrow-up fa-solid" style="margin-right: 2px;"></i>7.1%</span>
                                </div>
                            </div>
                        </div>
                        <div class="Order align-items-center border d-flex justify-content-around mt-3 py-3 rounded" style="box-shadow: 0px 0px 6px #aba8a8;">
                            <span class="px-2 py-1 rounded" style=" font-size: larger;     background: #b7b7b7c7;"><i class="fa-brands fa-opencart"></i></span>
                            <div class="">
                                <p class="mb-0 text-muted mb-1 text-capitalize" style=" font-weight: 600;">Earning</p>
                                <div class="align-items-baseline d-flex">
                                    <h5 class="font-weight-bold"><i class="fa-regular fa-credit-card small"></i> 2567 </h5>
                                    <span class="ml-2 small text-danger" style="font-weight: 500;"><i class="fa-arrow-down fa-solid" style="margin-right: 2px;"></i> 0.32%</span>
                                </div>
                            </div>
                        </div>
                        <div class="evenue"></div>
                        <div class="Earning"></div>

                    </div>
                </div>
                <!-- Recents Orders  -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#001</th>
                                        <td>15/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-success">paid</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">#002</th>
                                        <td>16/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                        <td><span class="badge badge-warning"> In Process</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#003</th>
                                        <td>15/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-success">paid</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">#004</th>
                                        <td>16/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                        <td><span class="badge badge-warning"> In Process</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#005</th>
                                        <td>15/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-success">paid</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">#006</th>
                                        <td>16/08/2022 </td>
                                        <td>Tamato</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                        <td><span class="badge badge-warning"> In Process</span></td>
                                        <td><span><i class="fa-solid fa-indian-rupee-sign"></i></span> 55</td>
                                        <td><span><i class="fa-solid fa-ellipsis"></i></span></td>
                                    </tr>

                                </tbody>

                            </table>
                            <span class="text-capitalize text-info" style=" font-weight: 500;">View Complete Order <i class="fa-solid small fa-arrow-up-right-from-square"></i> </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="../node_modules/chart.js/dist/chart.js"></script>
<script src="../js/adminJs.js"></script>
<script>
    // line graph 
    const saleReportsChartCanvas = document.getElementById('saleReportsChart').getContext('2d');
    const saleReportsGraph = new Chart(saleReportsChartCanvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fab', 'March', 'April', 'June', 'July'],
            datasets: [{
                label: 'Sale Reports    ',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: '#1ab293ab',
                backgroundColor: '#ff000073',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    //  doneut graph 
    const earningSaleChartCanvas = document.getElementById('earningSaleChart').getContext('2d');
    const earningSaleGraph = new Chart(earningSaleChartCanvas, {
        type: 'doughnut',
        data: {
            labels: ['Income', 'Text', 'Fees'],
            datasets: [{
                label: 'Sale Reports    ',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                borderAlign: 'cenetr',
                weight: 1,
                hoverOffset: 5,
            }],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>

</html>