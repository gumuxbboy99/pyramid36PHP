<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=2;$pcol<=$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=$prow;$pcol<=10-$prow;$pcol++){
		echo($pcol);
	}
	echo "<br/>";
}
?></pre></body>