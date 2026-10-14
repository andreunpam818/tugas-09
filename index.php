<?php 
    $submited = $_SERVER["REQUEST_METHOD"]==='POST';//true
    $nama ="";
    $looping= 1;
    $hasil = "";
    
    if($submited){ 

    $nama = ($_POST['nama']);
    $looping = ($_POST['looping']);
  
    for ($i = 1; $i <= $looping; $i++) {
    $hasil .= $i . ".". $nama . " ";
}
   
        
       
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 09 input Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class ="container">
        <section class="card">
            <h1>Loop berdasarkan input dari Form</h1>
            <form method="POST" action="">
                <label>Nama :</label>
               <input type="text" name="nama" id="nama" placeholder="Input Nama">
                <label>Masukan jumlah yang mau di Looping :</label>
                <input type="number" name="looping" id="looping" placeholder="Input looping">
             

                <button type="submit"> Submit</button>

            </form>

             <h2> Berikut Nama yang di Looping sebanyak : <?php echo $hasil; ?> </h2>
        </section>
    </main>

</body>
</html>