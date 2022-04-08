<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="./js/chart-js-config.js"></script>
    <title>TechBin</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>TechBin</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.html" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                    <a href="leaderBoard.html" class="dash-nav-item">
                        <i class="fas fa-chart-bar"></i> leader board </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="https://github.com/vamsee-cmd/Techbin" target="_blank" class="dash-nav-dropdown-item">GitHub</a>
                        <a href="http://LinkedIn.com/" target="_blank" class="dash-nav-dropdown-item">LinkedIn</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <div class="tools">
                    
                <a class="btn btn-warning btn-xl text-uppercase" href="login.php" style="border-radius: 10%;">Login</a>
                    <a href="https://github.com/vamsee-cmd/Techbin" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://github.com/vamsee-cmd/Techbin" target="_blank" class="tools-item">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/vamsee-cmd/Techbin" target="_blank" class="tools-item">
                        <i class="fab fa-twitter"></i>
                    </a>
                    
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> No of waste disposals today.</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">114</div>
                                        <div class="stats-change">
                                            <marquee>
                                            <span class="stats-percentage">+25%</span>
                                            <span class="stats-timeframe">from last month</span>
                                        </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success ">
                                <h3 class="stats-title"> Reward Points generated today. </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">25,541</div>
                                        <div class="stats-change">
                                            <marquee>
                                            <span class="stats-percentage">10,000 points</span>
                                            <span class="stats-timeframe">are same as 100 INR.</span>
                                        </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Contact us</h3>
                                <div class="stats-content d-flex flex-row">
                                    <div class="stats-change">
                                        <span class="stats-percentage">We typically reply within 24 hours.</span>
                                    </div>
                                </div>
                                <div class="stats-content d-flex flex-row-reverse">
                                    <div class="stats-icon">
                                        <a href="mailto:vamshi.embadi1234@gmail.com" style="color: inherit; text-decoration: none;" target="_blank"><i class="fa-solid fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Disposals in a week </div>
                                    <div class="spur-card-menu">
                                        <div class="dropdown show">
                                            <a class="spur-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body spur-card-body-chart">
                                    <canvas id="spurChartjsBar"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsBar").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [12, 17, 3, 5, 2],
                                                    backgroundColor: window.chartColors.primary,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div class="spur-card-title"> Techbin </div>
                                </div>
                                <div class="card-body ">
                                    <div class="notifications">
                                        <div class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">Point based Incentivized Tech Bin will have the facility to generate gift token for the bin users based on the frequency of the user using the bin.
                                            </div>
                                            </div>
                                            <div class="notification">
                                                <div class="notification-icon">
                                                    <i class="fas fa-inbox"></i>
                                                </div>
                                                <div class="notification-text">A system where the user is rewarded each time garbage is put into the bin and a picture of it is sent indicating the amount of garbage.</div>
                                                </div>
                                                
                                            <div class="notification">
                                                <div class="notification-icon">
                                                    <i class="fas fa-inbox"></i>
                                                </div>
                                                <div class="notification-text">It is a gamified portal to provide rewards motivating users to throw more and more garbage.</div>
                                   </div>
                                                <div class="notification">
                                                    <div class="notification-icon">
                                                        <i class="fas fa-inbox"></i>
                                                    </div>
                                                    <div class="notification-text">Motivating users to practice healthy waste disposal system.</div>
                                                    </div>
                                                             </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/spur.js"></script>
</body>

</html>