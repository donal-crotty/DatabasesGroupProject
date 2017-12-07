// Create the pie drilldown chart
function whiskeyChart(){
  $.ajax({
    url:"http://localhost:8080/databases_project/public/show",
    type:"GET",
    //async: true,
    dataType: "json",
    success:function(data){
      //Handle Data

      var chart_data = [];

      $.each(data , function(key,value){
        var obj = {
          "name" : value.brand,
          "y" : value.id,
          "drilldown": value.body
        };
        chart_data.push(obj);
      });

      //chart stuff here
      Highcharts.chart('container', {
        chart: {
          type: 'pie'
        },
        title: {
          text: 'Whiskey brands and product porportions. '
        },
        subtitle: {
          text: 'Click the slices to view each brand product.'
        },
        plotOptions: {
          series: {
            dataLabels: {
              enabled: true,
              format: '{point.name}: {point.y:.1f}%'
            }
          }
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: chart_data
        }]
      });
    },
    error:function(data){
      alert('Failed');
    }
  });
}

$(document).ready(function(){
  whiskeyChart();
});
