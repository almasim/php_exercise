<?php include 'inc/header.php'?>


<?php 
  $sql='SELECT * FROM feedback';
  $result= mysqli_query($conn,$sql);
  $feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

    <h2>Past Feedback</h2>

    <!-- If inside html  -->
    <?php if(empty($feedback)): ?>
     <p class="lead mt3">there is no feedback</p>
    <?php endif; ?> 

    <!-- foreach inside html  -->
    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
     <?php echo $item['body'] ?>
     <div class="text-secondary mt2">
     <?php echo $item['name'].'<br>';  
            echo $item['date'];?>
     </div>
    </div>
   </div>
   <?php endforeach; ?>


   <?php include 'inc/footer.php'?>