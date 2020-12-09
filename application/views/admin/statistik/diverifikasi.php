<style>
 #chart2{
   z-index:-10;}
</style>

    <!-- Dashboard content -->

                <center>
                <div id="chart2">
                </div>
                </center>

    <!-- /dashboard content -->

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart2',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Data Pendaftar Diverifikasi Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?>',
   x: -20
  },
  subtitle: {
   text: 'Jumlah Data Pendaftar Diverifikasi',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Data Pendaftar Diverifikasi'
   }
  },
  series: [{
   name: 'Data Pendaftar Diverifikasi Per-Bulan',
   data: <?php echo json_encode($grafik2); ?>
  }]
 });
});
</script>
