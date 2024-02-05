<?php
#1
//get method
   if(!empty($_GET["name"]) && !empty($_GET["age"])) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
<!-- /***************************************************************/ -->
<?php
#2
//post method
   if(isset($_POST["name"]) || isset($_POST["age"])) {
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";

   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   
   </body>
</html>

<?php
#3
//$_REQUEST variable
if (isset($_REQUEST["name"]) || isset($_REQUEST["age"])) {
   echo "Welcome " . $_REQUEST['name'] . "<br />";
   echo "You are " . $_REQUEST['age'] . " years old.";
   exit();
}
if (isset($_REQUEST["search"])) {
   echo "Welcome " . $_REQUEST['name'] . "<br />";
   exit();
}
// if (isset($_REQUEST['submitButton'])) {
//    if ($_REQUEST["name"] || $_REQUEST["age"]) {
//        echo "Welcome " . $_REQUEST['name'] . "<br />";
//        echo "You are " . $_REQUEST['age'] . " years old.";
//        exit();
//    }
//    if ($_REQUEST["search"]) {
//        echo "Welcome " . $_REQUEST['name'] . "<br />";
//        exit();
//    }
// }
?>
<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "post">
      Search: <input type = "text" name = "search" />

      </form>
      
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" name="submitButton"/>
      </form>
      
   </body>
</html>

