@extends('layouts.app')
@extends('includes.header')
@section('content')
     <script src="https://code.highcharts.com/stock/highstock.js"></script>
     <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
  <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="container" style="height: 400px; min-width: 310px"></div>
                    <script>
                        Highcharts.setOptions({
    global: {
        useUTC: false
    }
});

// Create the chart
Highcharts.stockChart('container', {
    chart: {
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },

    title: {
        text: 'Latest User Activity'
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'Random data',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
                ]);
            }
            return data;
        }())
    }]
});
                    </script>
                </div>
            </div>
            <hr>
        </div>
</section>
@endsection  