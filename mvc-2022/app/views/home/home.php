<?php  if (!defined ('DIR_BASE')) exit;
	$moviments = $data['moviments'];
?>

<div class="wrap">
	<h1>Dashboard</h1>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script> var moviments = JSON.parse('<?= json_encode($moviments); ?>'); </script>
	<script src="<?php echo URL_BASE ?>/app/views/home/script.js"></script>
	<?php
		$dataForm = array_column($moviments, 'date');
		foreach ($dataForm as $dataExplode) {
			$dataExplode = str_replace('-', ', ', $dataExplode);
		}
	?>
	<script> var dataPronta = JSON.parse('<?= json_encode($dataExplode); ?>'); </script>
	<script src="<?php echo URL_BASE ?>/app/views/home/painel.js"></script>
    <div id="curve_chart" style="width: 99%; height: 550px"></div>
	<div id="registroTipo" style="height: 500px;"></div>
</div>