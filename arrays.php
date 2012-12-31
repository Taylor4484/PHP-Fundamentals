<?php
		 

// $months = array('january', 'february', 'march', 'april', 'may');
// $months = ['january', 'february', 'march', 'april', 'may'];  5.4 syntax only!
// var_dump($months);
// echo $months[0];
// print_r($months);

$tuts_sites = array(
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://psd.tutsplus.com',
	'wptuts'  => 'http://wp.tutsplus.com',
); 	 
?>
	

<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<h1>Arrays</h1>
		<ul>
			<?php 
				
				// foreach($months as $month) 
				// {
				//  echo "<li>$month</li>";
				// } 

				// foreach($tuts_sites as $name => $url) 
				// {
				// 	echo "<li><a href='$url'>". ucwords($name) . "</a></li>";
				// } 
				
				foreach($tuts_sites as $name => $url): ?>
				<li>
					<a href="<?php echo $url; ?>"><?php echo $name ?></a>
				</li>			
				<?php endforeach ?>
		
		</ul>
	</body> 
</html>
