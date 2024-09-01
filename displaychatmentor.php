<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['student_id'];
      $_SESSION['muid'] = $uid;
      $_SESSION['display_chat'] = 0;
      $sql2 = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY time ASC";
      $result2 = mysqli_query($con, $sql2);
      $details2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
      foreach($details2 as $detail2){
      echo "
      <b>$detail2[sender]</b>
      <div>$detail2[time]</div>
      <div>$detail2[message]</div>";
    }
  }
?>