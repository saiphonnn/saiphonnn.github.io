<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from shifttimes where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from shifttimes";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>Check-In</td>    
                <td>Check-Out</td>      
            </tr>    
        </table>    
    </body>    
</html>
