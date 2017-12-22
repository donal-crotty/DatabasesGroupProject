// Create the pie drilldown chart
function whiskeyChart(){
  $.ajax({
    url:"http://localhost:8080/databases_project/public/show",
    type:"GET",
    //async: true,
    dataType: "json",
    success:function(data ){
      //Handle Data


      var brands =  [];
      var chart_data = [];
      var drilldown = [];

      var posts = JSON.parse(data.posts);
      var post_data = JSON.parse(data.post_data);


      $.each(posts , function(k , v){
         brands.push(v.brand);

          chart_data.push({
          name : v.brand,
          y : 40,
          drilldown: v.brand
        });

      });

      $.each(post_data , function(k , v){
        
          drilldown.push({
            name: k,
            id: k,
            data: [k , v]
          })
      });


      

      //chart stuff here
     var mychart =  Highcharts.chart('container', {
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
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                  }
              }
          },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: chart_data
        }],
        drilldown:{
          series:[{
            name:'product',
            colorByPoint: true,
          }]
        }
      });
     console.log(drilldown);
     mychart.options.drilldown.series = drilldown;
    },

    error:function(data){
     // alert('Failed');
    }
  });
}

$(document).ready(function(){
  whiskeyChart();
});
