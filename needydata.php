<?php
    while($row = mysqli_fetch_assoc($query)){
        $output .= '<tr style="text-align: center;">
        <td>'.$row['name'].'</td>
        <td>'.$row['mobile'].'</td>
        <td>'.$row['need_loc'].'</td>
        <td>'.$row['need_addre'].'</td>
     </tr>
    </tbody>';
    }
?>