<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->checkIn;?>  
        </td>  
        <td>  
            <?php echo $row->checkOut;?>  
        </td>    
        <tr>  
            <? php } ?> 
