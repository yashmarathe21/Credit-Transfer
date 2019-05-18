<?php 
  require_once 'core/init.php';
  include 'includes/header.php'; 
  include 'transaction.php';
?>
<br> <br>
<div class="transfer-form">
    <form action="" method="post">
      <div class="form-header">
        <h2>Transfer Credits</h2>
        <p>Fill out the information to tranfer the credits</p>
      </div>
      <div class="form-group">
        <label>Sender's ID</label>
        <input type="text" class="form-control" name="sender" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Receiver's ID</label>
        <input type="text" class="form-control" name="receiver" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Total credits to transfer</label>
        <input type="text" class="form-control" name="credit" autocomplete="off" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary btn-block btn-lg" name="transfer">Transfer</button>
      </div> 
    </form> 
  </div>

<?php 
  include 'includes/footer.php'; 
?>
    
</body>
</html>
