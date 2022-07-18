<?php 
$datachart = $this->db->query( "SELECT 	tb_kategori.nama_kategori, SUM(tb_orderdetail.harga) AS jumlah
                                FROM	tb_kategori, tb_orderdetail, tb_produk, tb_order
                                WHERE	tb_order.orderID = tb_orderdetail.orderID
                                AND	tb_orderdetail.produkID = tb_produk.produkID
                                AND		tb_produk.kategoriID = tb_kategori.kategoriID
                                GROUP BY	tb_kategori.nama_kategori")->result();
foreach ($datachart as $k => $v){
  $arrProd[] = ['label' => $v->nama_kategori, 'y' => $v->jumlah];
}
//print_r($datachart);die();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Grafik Penjualan Per-Kategori
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Grafik</li>
        </ol>
    </section>
    <section class="content">
        <head>
        <script type="text/javascript">
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light1", // "light2", "dark1", "dark2"
        animationEnabled: false, // change to true		
        title:{
            text: "Grafik pendapatan Per-Kategori"
        },
        data: [
        {
            // Change type to "bar", "area", "spline", "pie",etc.
            type: "column",
            dataPoints: 
            <?=json_encode($arrProd, JSON_NUMERIC_CHECK); ?>
            
        }
        ]
        });
        chart.render();

        }
        </script>
        </head>
        <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
        </body>
    <section class="content">
</div>