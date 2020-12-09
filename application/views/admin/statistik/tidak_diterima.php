<style>
 #chart4{
   z-index:-10;}
</style>

    <!-- Dashboard content -->

                <center>
                <div id="chart4">
                </div>
                </center>

    <!-- /dashboard content -->

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart4',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Data Pendaftar Tidak Diterima Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?>',
   x: -20
  },
  subtitle: {
   text: 'Jumlah Data Pendaftar Tidak Diterima',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Data Pendaftar Tidak Diterima'
   }
  },
  series: [{
   name: 'Data Pendaftar Tidak Diterima Per-Bulan',
   data: <?php echo json_encode($grafik4); ?>
  }]
 });
});
</script>
