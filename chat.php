 <?php 

include 'database.php';

$query = "SELECT * FROM chat ORDER BY id DESC";
$run = $connection->query($query);

while($row = $run->fetch_array()):
?>

<div id="chat_data">
<span style="color:#a20d29;"><?php echo $row['name']; ?></span> :
<span style="color:#fff;" ><?php echo $row[ 'msg']; ?></span>
<span style="float:right;"><?php echo formatDate($row['date']); ?></span>
</div>
<?php endwhile; ?>