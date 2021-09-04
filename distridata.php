<?php
    while($row = mysqli_fetch_assoc($query)){
        $output .= '<tr style="text-align: center;">
        <td>'.$row['name'].'</td>
        <td>'.$row['mobile'].'</td>
        <td>'.$row['distri_loc'].'</td>
     </tr>
    </tbody>';
    }
?>