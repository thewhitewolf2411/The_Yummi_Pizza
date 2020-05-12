<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yummi Pizza Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel = "icon" href = "/images/Logo.png" type = "image/x-icon"> 

        <!-- Compiled Stylesheet -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Data charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    </head>
    <body class="body-class">
        @if(Auth::user()->is_admin)
        <div class="app-dashboard-container">
        
            <div class="header-container logout-container">
                <div class="logo-container">
                    <a href="/"><img class="logo" src="/images/Logo.png" alt="Yummi Pizza Logo" /></a>
                </div>
                <div class="header-text-container">
                    <p>Hello, {{Auth::user()->name}}</p>
                    <a href = '/logout'>Log out</a>
                </div>
            </div>

            <div id="add-pizza-container">

            </div>

        </div>

        <div class="statistics-container">
        
            <p class="intro-text">Shopping statistics</p>
            <canvas id="myChart" width="400" height="400"></canvas>

        </div>
        @endif
    </body>
    <script type="text/javascript" src="js/app.js"></script>

    <script>


    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: this.product_names,
            datasets: [{
                label: 'Number of purchases',
                data: this.data,
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
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        var app = @json($pizzas);
        this.product_names = [];
        this.data = [];
        for(var i=0; i<app.length; i++){

            myChart.data.labels.push(app[i]['product_name']);
            myChart.data.datasets.forEach((dataset) => {
                dataset.data.push(app[i]['count']);
            });
        }


    });
</script>
</html>
