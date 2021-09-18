    <?php
	$foto = "<img src = 'FB_IMG_1530629264675.JPG' alt=''> ";
	$nama = "Dian Budi Santoso";
	$nim = "192520037";
	$alamat = "Jln S Parman no 37 RT02/RW05 Kutoarjo, Purworejo";
	$email = "budisan049@gmail.com";
	$minat = "Pemrograman Web";
	?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Data Diri</title>
    	<style>
    		body {
    			background-color: #e5e5e5e5;
    		}

    		img {
    			height: 200px;
    			width: 300px;
    		}

    		.card {
    			margin: auto;
    			background-color: blue;
    			width: 400px;
    			height: 550px;
    			border-radius: 20px;
    			padding: 10px;
    		}

    		h1 {
    			color: white;
    		}

    		h3 {
    			color: white;
    		}
    	</style>
    </head>

    <body>
    	<center>
    		<div class="card">
    			<h1>Data Diri</h1>
    			<h2><?php echo $foto ?></h2>
    			<h3> Nama Saya : <?php echo $nama ?></h3>
    			<h3> Nim : <?php echo $nim ?></h3>
    			<h3> Alamat : <?php echo $alamat ?></h3>
    			<h3> Email : <?php echo $email ?></h3>
    			<h3> Bidang Minat : <?php echo $minat ?></h3>
    		</div>
    	</center>
    </body>

    </html>