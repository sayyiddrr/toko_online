<?php 
$datachart = $this->db->query( "SELECT tb_order.tgl_order, SUM(tb_orderdetail.harga) AS jumlah, YEAR(tb_order.tgl_order) AS tahun
                                FROM	tb_order, tb_orderdetail
                                WHERE	tb_orderdetail.orderID = tb_order.orderID
                                GROUP BY	tahun")->result();
foreach ($datachart as $k => $v){
  $arrProd[] = ['label' => $v->tgl_order, 'y' => $v->jumlah];
}
//print_r($datachart);die();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Grafik Penjualan per Tahun
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Grafik</li>
        </ol>
    </section>
    <section class="content">
        <head>  
        <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: "Pendapatan per tahun"
            },
            axisX:{
                valueFormatString: "DD MMM",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },
            axisY: {
                title: "Closing Price (in USD)",
                valueFormatString: "$##0.00",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true,
                    labelFormatter: function(e) {
                        return "$" + CanvasJS.formatNumber(e.value, "##0.00");
                    }
                }
            },
            data: [{
                type: "area",
                xValueFormatString: "DD MMM",
                yValueFormatString: "$##0.00",
                /*dataPoints: [
                    { x: new Date(2016, 07, 01), y: 76.727997 },
                    { x: new Date(2016, 07, 02), y: 75.459999 },
                    { x: new Date(2016, 07, 03), y: 76.011002 },
                    { x: new Date(2016, 07, 04), y: 75.751999 },
                    { x: new Date(2016, 07, 05), y: 77.500000 },
                    { x: new Date(2016, 07, 08), y: 77.436996 },
                    { x: new Date(2016, 07, 09), y: 79.650002 },
                    { x: new Date(2016, 07, 10), y: 79.750999 },
                    { x: new Date(2016, 07, 11), y: 80.169998 },
                    { x: new Date(2016, 07, 12), y: 79.570000 },
                    { x: new Date(2016, 07, 15), y: 80.699997 },
                    { x: new Date(2016, 07, 16), y: 79.686996 },
                    { x: new Date(2016, 07, 17), y: 78.996002 },
                    { x: new Date(2016, 07, 18), y: 78.899002 },
                    { x: new Date(2016, 07, 19), y: 77.127998 },
                    { x: new Date(2016, 07, 22), y: 76.759003 },
                    { x: new Date(2016, 07, 23), y: 77.480003 },
                    { x: new Date(2016, 07, 24), y: 77.623001 },
                    { x: new Date(2016, 07, 25), y: 76.408997 },
                    { x: new Date(2016, 07, 26), y: 76.041000 },
                    { x: new Date(2016, 07, 29), y: 76.778999 },
                    { x: new Date(2016, 07, 30), y: 78.654999 },
                    { x: new Date(2016, 07, 31), y: 77.667000 }
                ]*/
                dataPoints: 
                <?=json_encode($arrProd, JSON_NUMERIC_CHECK); ?>
                
            }]
        });
        chart.render();

        }
        </script>
        </head>
        <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </body>
    <section class="content">
</div>