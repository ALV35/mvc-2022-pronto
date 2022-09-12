      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var infoGraph = [];
var titlesChart = ["Dia", "Valor"];
    infoGraph.push(titlesChart);
    
    moviments.forEach((resultado)=>{
        console.log(resultado)	    
        chartItem = [resultado.date, resultado.value];
        infoGraph.push(chartItem);
    })

    var data = google.visualization.arrayToDataTable(infoGraph);


    var options = {
    title: 'Movimentos do Livro',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart = new google.visualization.AreaChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}

