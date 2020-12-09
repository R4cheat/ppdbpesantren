<style>
 #chart3{
   z-index:-10;}
</style>

    <!-- Dashboard content -->

                <center>
                <div id="chart3">
                </div>
                </center>

    <!-- /dashboard content -->

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart3',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Data Pendaftar Diterima Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?>',
   x: -20
  },
  subtitle: {
   text: 'Jumlah Data Pendaftar Diterima',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Data Pendaftar Diterima'
   }
  },
  series: [{
   name: 'Data Pendaftar Diterima Per-Bulan',
   data: <?php echo json_encode($grafik3); ?>
  }]
 });
});
</script>
