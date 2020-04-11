<?php

	include 'header.php';
?>
 
 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    
    padding: 20px;
}

.col-25 {
    float: left;
    width: 22%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>
<div style="padding-top: 150px;"></div>
<h2 style="text-align: center;">İş Başvurusu</h2> 

<div class="container">
  <form action="is_basvuru_kaydet.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="adiniz">Adınız</label>
      </div>
      <div class="col-75">
        <input type="text" id="adiniz" name="adiniz" placeholder="Adınız.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="soyadiniz">Soyadınız</label>
      </div>
      <div class="col-75">
        <input type="text" id="soyadiniz" name="soyadiniz" placeholder="Soyadınız.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="meslek">Mesleğiniz</label>
      </div>
      <div class="col-75">
        <select id="meslek" name="meslek">
          <option value="asci">Aşçı</option>
          <option value="asci_yardimci">Aşçı Yardımcısı</option>
          <option value="garson">Garson</option>
          <option value="komi">Komi</option>
          <option value="temizlikci">Temizlikçi</option>
          <option value="bulasikci">Bulaşıkçı</option>
        </select>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="telefon">Telefon</label>
      </div>
      <div class="col-75">
        <input type="text" id="telefon" name="telefon" placeholder="Cep Telefonunuz.." required>
      </div>
    </div>    
    <div class="row">
      <div class="col-25">
        <label for="aciklama">Açıklama</label>
      </div>
      <div class="col-75">
        <textarea id="aciklma" name="aciklama" placeholder="Açıklmanız" style="height:200px"></textarea>
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Gönder">
    </div>
  </form>
</div>

</body>
</html>

