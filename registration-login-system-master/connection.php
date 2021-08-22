 <?php
 $Open = mysql_connect("localhost","root","");
        if (!$Open){
        die ("Connection to MySQL Engine Failed !<br>");
        }else{
        print ("Engine Connected<br>");
        }
    $Connection = mysql_select_db("login");
        if (!$Connection ){
        die ("Connection to MySQL Engine Failed !");
        }
        else{
        print ("Database Connected<br><br><br>");
        }
?>