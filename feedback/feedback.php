<?php include 'inc/header.php'; ?>
<?php
    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<h2>Past Feedback</h2>
<?php if(empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif;?>    

<?php foreach($feedback as $feed): ?>


<div class="card my-3 w-75">
    <div class="card-body text-center">
    <?php echo $feed['body']; ?>
    <div class="text-secondary mt-2">
        By <?php echo $feed['name']; ?> on <?php echo $feed['date']; ?>
    </div>
    </div>
</div>
<?php endforeach ?>
<?php include 'inc/footer.php'; ?>
