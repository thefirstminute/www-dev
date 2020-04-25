<?php 
// set actual path to connection here
include_once 'cfg.php';
if (isset ($sql_con)) {
  $tbl=isset($_GET['tbl']) ? preg_replace("#[^0-9a-z_-]#i", '', $_GET['tbl']) : '';

  if (mysqli_query($sql_con, "DESCRIBE `$tbl`")){
    $sql=mysqli_query($sql_con, "SELECT id FROM `$tbl` ORDER BY id DESC LIMIT 1");
    $arr=mysqli_fetch_array($sql);
    $highest=$arr['id'];
    mysqli_free_result($sql);

    $newID=$highest+1;

    $sql_update=mysqli_query($sql_con, "ALTER TABLE $tbl AUTO_INCREMENT = $newID");

    if ($sql_update) echo 'id updated to: '. $newID;
    else echo 'failed to update id to'. $newID;

  } else echo 'that table does not exist';
} else echo 'no connection';
