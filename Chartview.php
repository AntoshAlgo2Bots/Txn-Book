<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart - Debit and Credit</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Fetch data from PHP
            fetch('TransactionChart.php') // Change this to the path of your PHP script
                .then(response => response.json())
                
                .then(data => {
                    const dataTable = google.visualization.arrayToDataTable(data);
                    const options = {
                        title: 'Debit and Credit Amounts',
                        chartArea: {width: '50%'},
                        hAxis: {
                            title: 'Total Amount',
                            minValue: 0
                        },
                        vAxis: {
                            title: 'Transaction Type'
                        }
                    };

                    const chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                    chart.draw(dataTable, options);
                })
                .catch(error => console.error('Error fetching data:', error));
        }
    </script>
</head>
<body>

<div id="chart_div" style="width: 900px; height: 500px;"></div>

</body>
</html>
