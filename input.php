<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="shortcut icon" type="image/x-icon" href="logowikrama.png" />
      <title>Beri Bantuan Shodaqoh</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <center>
         <h1>Bantuan Shodaqoh</h1>
         <form action="insert.php" method="post">
            <p>
               <label for="Nama">Nama:</label>
               <input class="forminputt" type="text" name="nama" id="firstName">
            </p>
            <p>
               <label for="ID">ID:</label>
               <input class="forminputt" type="text" name="id" id="lastName">
            </p>
            <p>
               <label for="Paket">Paket:</label>
               <select class="forminputt" name="paket" id="Paket">
                <option value="Paket1">Paket 1</option>
                <option value="Paket2">Paket 2</option>
                <option value="Paket3">Paket 3</option>
               </select>
            </p>
            <p>
               <label for="Kategori">Kategori:</label>
               <select class="forminputt" name="kategori" id="Kategori">
                <option value="Barang">Barang</option>
                <option value="Uang">Uang</option>
               </select>
            </p>
            <p>
               <label for="Nominal">Nominal:</label>
               <input class="forminputt" type="text" name="nominal" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
         </form>
      </center>






      
   </body>
</html>