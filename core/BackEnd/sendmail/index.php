<?php

$header="MIME-Version: 1.0\r\n";
$header.='From:"Admin"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src=""/>
			<br />
			Produit ajouté !!!
			
		</div>
	</body>
</html>
';

mail("marthesheila82@gmail.com", "Salut ", $message, $header);

header('Location: ../library-assets.php');	
}
}
?>

