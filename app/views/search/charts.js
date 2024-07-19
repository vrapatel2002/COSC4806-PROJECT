google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Label', 'Value'],
        ['IMDb', movieRating]
    ]);

    var options = {
        width: 400, height: 120,
        redFrom: 0, redTo: 5,
        yellowFrom: 5, yellowTo: 7,
        greenFrom: 7, greenTo: 10,
        minorTicks: 5
    };

    var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
    chart.draw(data, options);

    // Hide the loading screen and show the main content
    document.getElementById('loading').style.display = 'none';
    document.getElementById('main-content').style.display = 'block';
}
