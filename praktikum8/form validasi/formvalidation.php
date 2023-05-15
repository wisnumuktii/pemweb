<!DOCTYPE html>
<html lang="en">
<head>
<Link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" intergrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoacApmYm81iuXoPkFOJwJ8ERdknLPMO">
<style>
    .warning {color: #ff0000;}
</style>
</head>
<body>

<?php
$error_nama = "";
$error_email = "";
$error_web = "";
$error_pesan = "";
$error_telp = "";

$nama = "";
$email = "";
$web = "";
$pesan = "";
$telp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"]))
    {
        $error_nama = "nama tidak boleh kosong";
    }
    else
    {
        $nama = cek_input($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nama))
        {
            $error_nama = "Inputan Hanya boleh huruf dan spasi";
        }
    }
if (empty($_POST["email"]))
{
    $error_email = "Email tidak boleh kosong";   
}
else
{
    $email = cek_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error_email = "Format email Invalid";
    }
}

if (empty($_POST["pesan"]))
{
    $error_pesan = "Pesan tidak boleh kosong";
}
else
{
    $pesan = cek_input($_POST["pesan"]);
}

if (empty($_POST["web"]))
{
    $error_web = "Pesan tidak boleh kosong";
}
else
{
    $web = cek_input($_POST["web"]);   

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web))
    {
        $error_web = "URL tidak valid";
    }  

}
if (empty($_POST["telp"]))
    {
        $error_telp = "telp tidak boleh kosong";
    }
    else
    {
        $telp = cek_input($_POST["telp"]);
    
        if(!is_numeric($telp))
        {
            $error_telp = 'Nomer HP hanya boleh angka';
        }
    }
}

function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="row">
<div class="col-md-6">
<div class="card">
    <div class="card-header">
        Contoh Form Validation dengan PHP
    </div>
    <div class="card-body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class=from-group row>
            <LABEL for="nama" class="col-sm-2 col-form-label">Nama</LABEL>
        <div class="col-sm-10">
            <input type="text" name="nama" class="from-control <?php echo ($error_nama !="" ?"is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span> 
        </div>
    </div>

    <div class=from-group row>
            <LABEL for="Email" class="col-sm-2 col-form-label">Email</LABEL>
        <div class="col-sm-10">
        <input type="text" name="email" class="from-control <?php echo ($error_email !="" ?"is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
        </div>
    </div>

    <div class=from-group row>
            <LABEL for="website" class="col-sm-2 col-form-label">website</LABEL>
        <div class="col-sm-10">
            <input type="text" name="web" class="from-control <?php echo ($error_web !="" ?"is-invalid" : ""); ?>" id="web" placeholder="Web" value="<?php echo $web; ?>"><span class="warning"><?php echo $error_web; ?></span> 
        </div>
    </div>

    <div class=from-group row>
            <LABEL for="telp" class="col-sm-2 col-form-label">Telp</LABEL>
        <div class="col-sm-10">
            <input type="text" name="telp" class="from-control <?php echo ($error_telp !="" ?"is-invalid" : ""); ?>" id="telp" placeholder="Telpon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span> 
        </div>
    </div>

    <div class=from-group row>
        <LABEL for="Telp" class="col-sm-2 col-form-label">Pesan</LABEL>
        <div class="col-sm-10">
        <textarea type="text" name="pesan" class="from-control <?php echo ($error_pesan !="" ?"is-invalid" : ""); ?>" placeholder="Masukkan pesan Anda di sini"><?php echo $pesan; ?></textarea><span class="warning"><?php echo $error_pesan; ?></span> 
        </div>
    </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button> 
            </div> 
        </div>
    </form>

</div>
</div>
</div>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo "Nama = ".$nama;
echo "<br>";
echo "Email = ".$email;
echo "<br>";
echo " Website = ".$web; 
echo " <br>"; 
echo " Telp = ".$telp; 
echo " <br>"; 
echo " Pesan = ".$pesan; 
?>

</body>
</html>