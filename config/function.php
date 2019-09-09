<?php
  $conn = mysqli_connect("localhost", "root", "root", "geobak");

  function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row; // cara ngepush versi php
    }
    return $rows;
  }

  
?>