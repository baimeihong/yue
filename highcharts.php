<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"><link rel="icon" href="https://jscdn.com.cn/highcharts/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* css 代码  */
        </style>
        <script src="https://code.highcharts.com.cn/highcharts/highcharts.js"></script>
        <script src="https://code.highcharts.com.cn/highcharts/modules/exporting.js"></script>
        <script src="https://code.highcharts.com.cn/highcharts/modules/oldie.js"></script>
        <script src="https://code.highcharts.com.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
    </head>
    <body>
        <div id="container" style="min-width:400px;height:400px"></div>
        <script>
            // JS 代码 
        var chart = Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: '温度变化范围'
        },
        subtitle: {
            text: '数据来源: WorldClimate.com'
        },
        xAxis: {
            categories: ['28号', '29号', '30号', '31号', '1号', '2号', '3号']
        },
        yAxis: {
            title: {
                text: '气温 (°C)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    // 开启数据标签
                    enabled: true          
                },
                // 关闭鼠标跟踪，对应的提示框、点击事件会失效
                enableMouseTracking: false
            }
        },
        series: [{
            name:  "<?php echo $arr[0]['citynm']?>",
            data: [<?php echo $arr[0]['temp_high']?>,<?php echo $arr[1]['temp_high']?>,<?php echo $arr[2]['temp_high']?>,<?php echo $arr[3]['temp_high']?>, <?php echo $arr[4]['temp_high']?>,<?php echo $arr[5]['temp_high']?>,<?php echo $arr[6]['temp_high']?>]
        }]
    });

        </script>
    </body>
</html>