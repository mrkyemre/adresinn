<h2>Overwiev of the users</h2>

<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>
    
    <?php foreach($users as $user):   ?>
    
    <tr>
        <td><?php echo $user['User']['firstname'] ?></td>
        <td><?php echo $user['User']['lastname'] ?></td>
    </tr>
    
  <?php endforeach ?>  
    
</table>
