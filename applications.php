<?php
    $title = "Applications";
    include 'includes/header.php';  //Ovde je session_start()
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    $results =$crud->getApplications();

    
    
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>Company name</th>
        <th>Position</th>
        <th>Date of applicating</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <tr>
        <?php 
            //Za svaki item iz kolekcije 
            while($r = $results->fetch(PDO::FETCH_ASSOC)){?>   
            <tr>
                <td><?php echo $r['application_id']?></td>
                <td><?php echo $r['company_name']?></td>
                <td><?php echo $r['position']?></td>
                <td><?php echo $r['doa']?></td>
                <td><?php echo $r['name']?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['application_id']?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['application_id']?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this application?')"
                        href="delete.php?id=<?php echo $r['application_id']?>"
                         class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>        
           
        
    </tr>
</table>

<br>
<br>
<br>
<?php
    include 'includes/footer.php';
?>