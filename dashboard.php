<?php require_once "core/auth.php" ?>

<?php include "template/header.php"; ?>

<div class="row">
    <!-- Today Visitor -->
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-heart h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('viewers'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Today Visitor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Post -->
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('post_list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-list h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('posts'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Post</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Category -->
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('category_add.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-layers h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('categories'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Users -->
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('user_list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-user h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('users'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <!-- Line Chart -->
    <div class="col-12 col-xl-7">
        <div class="card overflow-hidden shadow mb-4">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4>Visitors</h4>
                    <div>
                        <img src="<?php echo $url; ?>assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                    </div>
                </div>

                <canvas id="ov" height="110"></canvas>
            </div>
        </div>
    </div>
    <!-- Doughnut Chart -->
    <div class="col-12 col-md-6 col-xl-5">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4>Categories/ Posts</h4>
                    <div>
                        <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                    </div>
                </div>

                <canvas id="op" height="200"></canvas>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-7">
        <div class="card mb-4">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h4>Subscriber List</h4>
                <div>
                    <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                </div>
            </div>
            <div class="">
                <table class="table table-hover sub-list mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech </td>
                            <td>Jan 1,2019</td>
                            <td><span class="badge badge-pill badge-danger">Close</span></td>
                            <td>$ 100.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt </td>
                            <td>Jan 10,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>$ 3000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech </td>
                            <td>Jan 1,2019</td>
                            <td><span class="badge badge-pill badge-danger">Close</span></td>
                            <td>$ 100.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech </td>
                            <td>Jan 12,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>$ 2000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt </td>
                            <td>Jan 10,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>$ 3000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>
<script src="<?php echo $url; ?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url; ?>assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>assets/vendor/chart_js/Chart.min.js"></script>
<script>
    $('.counter-up').counterUp({
        delay: 10,
        time: 1000,
    });

    //line chart start

    <?php

    $dateArr = [];
    $visitorRate = [];

    $today = date("Y-m-d");
    for ($i=0; $i<10; $i++) {

        $date = date_create($today);
        date_sub($date, date_interval_create_from_date_string("$i days"));

        $current = date_format($date, "Y-m-d");
        array_push($dateArr, $current);

        $result = countTotal("viewers", "CAST(created_at AS DATE) = '$current'");
        array_push($visitorRate, $result);
    }

    ?>

    let dateArr = <?php echo json_decode($dateArr); ?>
    let vistorRate = <?php echo json_decode($visitorRate); ?>

    let ov = document.getElementById('ov').getContext('2d');
    let ovChart = new Chart(ov, {
        type: 'line',
        data: {
            labels: dateArr,
            datasets: [{
                label: 'Order Count',
                data: visitorRate,
                backgroundColor: [
                    '#007bff30',
                ],
                borderColor: [
                    '#007bff',
                ],
                borderWidth: 1,
                tension: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        display: false,
                        beginAtZero: true
                    },
                    gridLines: [{
                        display: false
                    }],
                }],
                xAxes: [{
                    display: false,
                    gridLines: [{
                        display: false
                    }],
                    ticks: {
                        display: false
                    }
                }]
            },
            legend: {
                display: true,
                shape: "circle",
                labels: {
                    fontColor: '#333',
                    usePointStyle: true
                }
            }
        }
    });

    //line chart end

    //doughnut chart start

    <?php
    $catName = [];
    $countPostByCategory = [];
    foreach (categories() as $c) {
        array_push($catName, $c['title']);
        //SELECT COUNT(id) FROM posts WHERE category_id = 1
        array_push($countPostByCategory, countTotal('posts', "category_id={$c['id']}"));
    }
    ?>

    let catArr = <?php echo json_encode($catName); ?>;
    let countArr = <?php echo json_encode($countPostByCategory); ?>;

    let op = document.getElementById('op').getContext('2d');
    let opChart = new Chart(op, {
        type: 'doughnut',
        data: {
            labels: catArr,
            datasets: [{
                label: '# of Votes',
                data: countArr,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    display: false
                }]
            },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: '#333',
                    usePointStyle: true
                }
            }
        }
    });

    //doughnut chart end
</script>