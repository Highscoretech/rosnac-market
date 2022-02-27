<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>withdawal</title>
    <style>
        body{
  background-color:cyan;
}

ul{
  top:0;
  background-color:black;
  list-style-type:none;
  padding:0;
  margin:0;
  position:fixed;
  overflow:hidden;
  width:100%;
  
}
li a{
  padding:20px;
  display:block;
  text-decoration:none;
  color:white;
  font-family:"Gabriola";
  font-size:2vw;
}
ul a:hover{
  color:white;
}
ul a:hover:not(.active){
  background-color:gray;
}
.one{
  margin:0;
  font-family:"Gabriola";
  font-size:10vw;
  color:black;
  padding:50px;
}
.new_acc{
  color:black;
  font-family:"Gabriola";
  font-size:2vw;
  
}
/* table{
    background: white;
    font-family: "Gabriola";
    text-align: center;
    align-items: center;
} */
form{
    text-align: center;
}
.card{
    background: white;
    padding: 0px;
    margin: 1px;
}

    </style>
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>
<body>

  <center><h2 class="one">Rosnac Bank</h2></center>
  
  <div class="card">
  <h2 style="text-align: center;" class="new_acc">WITHDRAW</h2>
    <table>
    <form action="cashout.php" method="POST">
      <h4 style="text-align: center;">Wallect address: <input type="text" placeholder="Wallect address" name="wallect"></h4>
      <h4 style="text-align: center;">email :           <input type="email" placeholder="email" name="wallect"></h4>
      <h4 style="text-align: center;">Password:        <input type="password" placeholder="Password" name="wallect"></h4>
     <center> <button name="cash" value="cash" type="submit">Submit<i class="fa fa-paper-plane"></i></button></center>

  </form>
    </table>
</div>
</body>
</html>