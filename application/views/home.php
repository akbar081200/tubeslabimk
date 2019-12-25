
<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
<div class="alert alert-success">
  <strong>Selamat Datang</strong>
</div>
	<div style="width:75%;">
		<canvas id="canvas"></canvas>
	</div>
	
	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: [  <?php foreach($grafik as $aw){
          echo "'".date("d F Y", strtotime($aw->tgl_transaksi))."',";
        }?>],
				datasets: [{
					label: 'Transaksi',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						<?php foreach($grafik as $aw){
          echo "'".$aw->total_harga."',";
        }?>
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Pemesanan Supplier'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					x: {
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					},
					y: {
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		
	</script>
