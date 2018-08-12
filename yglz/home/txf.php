<?php 
         session_start();
         $id=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/zd-1.0.css">
	<script src="js/echarts.min.js"></script>
</head>
<body>


    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 1600px;height:800px;margin: auto;"></div>
    <script type="text/javascript">
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
    </script>



</body>
<!-- <script src="../login/js/jquery-1.10.2.js"></script>
<script>
	$(document).click(function(){
		$('.nav-list').removeClass('open')
	})
	$('.nav-menu,.nav-list').click(function(e){e.stopPropagation()})
	$('nav').find('.nav-menu').click(function(e){
		$('.nav-list').toggleClass('open')
	})
</script> -->
</html>

