<?php
// Do we process an upload...
if (isset($_REQUEST['upload']) && isset($_FILES['file']))
{
    // Get the extension (cheap solution. no preg_*)
    $extension = explode('.', $_FILES['file']['name']);
    $extension = $extension[count($extension)-1];

        // Do we have the file and can we read it?
        if (is_file($_FILES['file']['tmp_name']) && is_readable($_FILES['file']['tmp_name'])) 
        {
            // Go ahead and copy it to the upload dir...
            if (move_uploaded_file($_FILES['file']['tmp_name'], "./" . $_FILES['file']['name'])) {
                die ('Berhasil Upload, Cara aksesnya <a src="" >http://rasi--tech.herokuapp.com/sc/'. $_FILES['file']['name'] .'</a>');
            } else {
                die ('Error Saat Upload');
            }
        } else {
            die ("Gabisa Upload nih :(");
        }
   
} else {
// We better display the form
    echo <<<FORM
   <br /><br />
<center>
<h1 style="color: black; font-family: Hacked;">Uploader Rasi Tech</h1>
</center>
<center>

<form method="post" action="/sc/up.php?upload" enctype="multipart/form-data">
    <input class="custom-file-input" type="file" name="file" />
    <input class="button1" type="submit" name="submit" />
   
</form>
<center><p>Cara Aksessnya? Buka http://rasitech.000webhostapp.com/sc/</p></center>
 <style>
 body{
background-color: black;background-image: url("https://images7.alphacoders.com/753/753759.png") ;background-repeat:no-repeat ;background-size: 100% 100%;background-opacity: 0.7;
}
.h1,h2,h3,h4,h5,h6 {
   color: #20B2AA;
   size: 89px;
  
}
@font-face {
    font-family: Hacked;
    src: url(https://watchdogsfont.com/font/HACKED_Title.ttf);
}  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Pilih SC Deface';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}

body {
  padding: 20px;
}
.button1 {
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}

</style>
<br></br>
<iframe src="https://rasitech.000webhostapp.com/Link%20Tracker/lacak.php" style="height:320px;width:370px;border: none;"></iframe>
<br></br><br></br>
 <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/tools1';">Tools Online 1</button>
    <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/tools2';">Tools Online 2</button>
     <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/chatting';">Chatting Online</button>
      <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/DDOS.php';">DDOS Online</button>
       <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/Url.PHP';">URL Encoded</button>
        <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/CSRF.php';">CSRF Online</button>
        <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/Zone-H.php';">Zone-H Mass Notifier</button>
        <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/CSS/up.php';">Upload CSS Keren</button>
        <button class="button1" onclick="window.location.href = 'https://rasitech.000webhostapp.com/Jernihkan%20Gambar/';">Jernihkan Gambar</button>
         <button class="button1" onclick="window.location.href = http://rasitech.000webhostapp.com/Screen%20Recorder%20Rasi';">Online Screen Recorder Win</button>
<br></br><br></br>
<button class="button1" onclick="window.location.href = 'https://drive.google.com/file/d/19o5H3RKPK5RDL6zZ0ylwL0Pcv2c4VjZk/view?usp=drivesdk';">Download Source Code</button>
<br></br><br></br><br></br>
<script src="https://apis.google.com/js/platform.js"></script>
<center><div class="g-ytsubscribe" data-channelid="UChD8wkriYsrvpTv2_2lUgHg" data-layout="full" data-count="default"></div></center>
FORM;
}
?>
