<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['+2 Science', 3],
          ['+2 Management', 1],
          ['BBA', 1],
          ['BIM', 1],
          ['BIT', 2],
          ['BSc', 2],
        ]);

        var piechart_options = {title:'Pie Chart: How Much Pizza I Ate Last Night',
                       width:400,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        
</script>
</head>
<body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>
