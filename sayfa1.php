<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa1 </title>
    <style type="text/css"> 
    
    h1{
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        text-decoration: underline;
        color: cornflowerblue;
        text-align: center;
    }
    
    form{
        position:relative;
        left: 40em;
        top: 10px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif

    }
    .buttons{
       position: relative;
       left: 45em;
        top: 10px;    
    }
 
</style>     
</head>
<body>
     <h1> TOPLAMA İŞLEMİ</h1>
    <form name="topislem">
         Sayı 1: <input type="text" name="sayı1" placeholder="Bir Sayı Giriniz." required="required">  <br>
         <br>
         Sayı 2:  <input type="text" name="sayı2" placeholder="Bir Sayı Giriniz." required="required"> 
    <br>
    <br>
    </form>
    <div class="buttons">
    
        <button> Topla</button> 
        <button> Sil </button>

    </div>
</body>
</html>