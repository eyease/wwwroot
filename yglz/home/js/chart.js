
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '梁忠路通行费示例  单位：万元'
            },
            tooltip: {},
            legend: {
                data:['清分金额']
            },
            xAxis: {
                data: ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"]
            },
            yAxis: {},
            series: [{
                name: '月清分金额',
                type: 'bar',
                data: [961.76, 1344.78, 1016.25, 941.39, 862.08]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
