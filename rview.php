
<div class="container">
    <h1>ADMIN MANAGEMENT</h1>
    <h2>Rentings</h2>
    <figure>

        <?php
     include_once 'rfeedback.php';
     $stmt = $db->query('SELECT * FROM rent');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
     echo '<th>name</th>';
     echo '<th>identity</th>';
     echo '<th>dtime</th>';
     echo '<th>car</th>';
     echo '<th>location</th>';
        echo '</tr>';
        foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['name'].'</td>';
            echo '<td>'.$feedback['identity'].'</td>';
            echo '<td>'.$feedback['dtime'].'</td>';
            echo '<td>'.$feedback['car'].'</td>';
            echo '<td>'.$feedback['location'].'</td>';
            echo '<td><a href="rdelete.php?id='.$feedback['id'].'">Delete</a> <a href="redit.php?id='.$feedback['id'].'">Edit</a> </td>'; 
            echo '</tr>';
        }
     echo '</table>';

     
     ?>
    </figure>
</div>
