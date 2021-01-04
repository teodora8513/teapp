<?php
    $title = "Applications";
    include 'includes/header.php';
    require_once 'db/conn.php';
    $results =$crud->getApplications();
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>Company name</th>
        <th>Position</th>
        <th>Contact mail</th>
        <th>City</th>
        <th>Date of applicating</th>
        <th>Notes</th>
        <th>Status</th>
    </tr>
    <tr>
        <?php 
            //Za svaki item iz kolekcije 
            while($r = $results->fetch(PDO::FETCH_ASSOC)){?>   
            <tr>
                <td><?php echo $r['application_id']?></td>
                <td><?php echo $r['company_name']?></td>
                <td><?php echo $r['position']?></td>
                <td><?php echo $r['contact_mail']?></td>
                <td><?php echo $r['city']?></td>
                <td><?php echo $r['doa']?></td>
                <td><?php echo $r['notes']?></td>
                <td><?php echo $r['name']?></td>
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