@extends('layouts.app')
@extends('includes.header')
@section('content')
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="container" style="height: 400px; min-width: 310px"></div>
                <script>
                    // Create the pie drilldown chart
                    Highcharts.chart('container', {
                        chart: {
                            type: 'pie'
                        },
                        title: {
                            text: 'Browser market shares. January, 2015 to May, 2015'
                        },
                        subtitle: {
                            text: 'Click the slices to view versions. Source: netmarketshare.com.'
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
                            data: [{
                                name: 'IE',
                                y: 56.33,
                                drilldown: 'IE'
                            }, {
                                name: 'Chrome',
                                y: 24.03,
                                drilldown: 'Chrome'
                            }, {
                                name: 'Firefox',
                                y: 10.38,
                                drilldown: 'Firefox'
                            }, {
                                name: 'Safari',
                                y: 4.77,
                                drilldown: 'Safari'
                            }, {
                                name: 'Opera',
                                y: 0.91,
                                drilldown: 'Opera'
                            }, {
                                name: 'Proprietary or Undetectable',
                                y: 0.2,
                                drilldown: null
                            }]
                        }],
                        drilldown: {
                            series: [{
                                name: 'IE',
                                id: 'IE',
                                data: [
                                ['v11.0', 24.13],
                                ['v8.0', 17.2],
                                ['v9.0', 8.11],
                                ['v10.0', 5.33],
                                ['v6.0', 1.06],
                                ['v7.0', 0.5]
                                ]
                            }, {
                                name: 'Chrome',
                                id: 'Chrome',
                                data: [
                                ['v40.0', 5],
                                ['v41.0', 4.32],
                                ['v42.0', 3.68],
                                ['v39.0', 2.96],
                                ['v36.0', 2.53],
                                ['v43.0', 1.45],
                                ['v31.0', 1.24],
                                ['v35.0', 0.85],
                                ['v38.0', 0.6],
                                ['v32.0', 0.55],
                                ['v37.0', 0.38],
                                ['v33.0', 0.19],
                                ['v34.0', 0.14],
                                ['v30.0', 0.14]
                                ]
                            }, {
                                name: 'Firefox',
                                id: 'Firefox',
                                data: [
                                ['v35', 2.76],
                                ['v36', 2.32],
                                ['v37', 2.31],
                                ['v34', 1.27],
                                ['v38', 1.02],
                                ['v31', 0.33],
                                ['v33', 0.22],
                                ['v32', 0.15]
                                ]
                            }, {
                                name: 'Safari',
                                id: 'Safari',
                                data: [
                                ['v8.0', 2.56],
                                ['v7.1', 0.77],
                                ['v5.1', 0.42],
                                ['v5.0', 0.3],
                                ['v6.1', 0.29],
                                ['v7.0', 0.26],
                                ['v6.2', 0.17]
                                ]
                            }, {
                                name: 'Opera',
                                id: 'Opera',
                                data: [
                                ['v12.x', 0.34],
                                ['v28', 0.24],
                                ['v27', 0.17],
                                ['v29', 0.16]
                                ]
                            }]
                        }
                    });


//                     Highcharts.setOptions({
//                         global: {
//                             useUTC: false
//                         }
//                     });

// // Create the chart
// Highcharts.stockChart('container', {
//     chart: {
//         events: {
//             load: function () {

//                 // set up the updating of the chart each second
//                 var series = this.series[0];
//                 setInterval(function () {
//                     var x = (new Date()).getTime(), // current time
//                     y = Math.round(Math.random() * 100);
//                     series.addPoint([x, y], true, true);
//                 }, 1000);
//             }
//         }
//     },

//     rangeSelector: {
//         buttons: [{
//             count: 1,
//             type: 'minute',
//             text: '1M'
//         }, {
//             count: 5,
//             type: 'minute',
//             text: '5M'
//         }, {
//             type: 'all',
//             text: 'All'
//         }],
//         inputEnabled: false,
//         selected: 0
//     },

//     title: {
//         text: 'Latest User Activity'
//     },

//     exporting: {
//         enabled: false
//     },

//     series: [{
//         name: 'Random data',
//         data: (function () {
//             // generate an array of random data
//             var data = [],
//             time = (new Date()).getTime(),
//             i;

//             for (i = -999; i <= 0; i += 1) {
//                 data.push([
//                     time + i * 1000,
//                     Math.round(Math.random() * 100)
//                     ]);
//             }
//             return data;
//         }())
//     }]
// });
</script>
</div>
</div>
<hr>
</div>
</section>
@endsection  
