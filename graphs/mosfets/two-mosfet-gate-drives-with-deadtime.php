
<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	window.jQuery || document.write('<script src="http://code.jquery.com/jquery-latest.min.js"><\/script>')
</script>
<script src="http://cladlab.com/eng-graphs-js/lib/jquery.csv-0.71.js"></script>

<div id="dashboard1">
	<div id="chart1"></div>
   <div id="control1"></div>
</div>

<script>
	// Load the visualization library from Google with core and control libraries and set a listener
	google.load('visualization', '1.0', {'packages':['corechart', 'controls']});
	google.setOnLoadCallback(drawChartTmgdwd);
	
	<?php
	// Get full path
	$cur_file=str_replace('\\','/', realpath(dirname(__FILE__)));
	// Remove everything up to public_html
	$cur_file=preg_replace('/(.*?)\/(.*?)\/(public_html|htdocs)/', '', $cur_file);
	// Output HTML
	echo 'var currPathTmgdwd = "' . $cur_file . '";';
	?>
	
	function drawChartTmgdwd() {
		// grab the CSV
		jQuery.get(currPathTmgdwd + "/two-mosfet-gate-drives-with-deadtime.csv",
			// Call-back once CSV has been returned
			function(csvString) {
				// Transform the CSV string into a 2-dimensional array
				var arrayData = jQuery.csv.toArrays(csvString, {onParseValue: jQuery.csv.hooks.castToScalar});
				
				// This new DataTable object holds all the data
				var data = new google.visualization.arrayToDataTable(arrayData);
				
				var dashboard = new google.visualization.Dashboard(
					document.getElementById('dashboard1'));
				
				var control = new google.visualization.ControlWrapper({
					controlType: 'ChartRangeFilter',
					containerId: 'control1',
					options: {
						filterColumnIndex: 0,
						ui: {
							chartOptions: {
								height: 50,
								width: 800,
								chartArea: {
									width: '60%'
								}
							},
							chartView: {
								columns: [0, 1]
							}
						}
					}
				});
				
				var chart = new google.visualization.ChartWrapper({
					chartType: 'LineChart',
					containerId: 'chart1',
					options: {
						title: 'Two MOSFET gate drives with dead-time.',
						hAxis: {title: data.getColumnLabel(0)},
						vAxis: {title: data.getColumnLabel(1), minValue: data.getColumnRange(1).min, maxValue: data.getColumnRange(1).max},
						width: 800,
						height: 300,
						legend: 'none'
					}
				});
				
				// Establish dependencies, control drives chart
				dashboard.bind(control, chart);
				
				// Draw data
				dashboard.draw(data);
			}
		);
	}
</script>