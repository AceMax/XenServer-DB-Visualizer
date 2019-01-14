<?php

include (__DIR__ . "/../classes/xendb.php");
include_once(__DIR__ . "/../pages/header.php");


$xendb = new XenDB();

$xml = $xendb->ReadDB();

// Generate links
foreach ($xml["table"] as $key => $row) {
  echo '<a href=?attr=' . $row["@attributes"]["name"] . '>' . $row["@attributes"]["name"] . '</a> | ';
}

if (@$_GET['attr']) {
  $attr = $_GET['attr'];
} else {
  $attr = "SR";
}

foreach ($xml["table"] as $key => $row) {
  if ($row["@attributes"]["name"] == $attr) {
    echo '<nav class="navbar bg-alified navbar-dark" style="height: 30px; background: lightgrey;">' . $row["@attributes"]["name"] . "</nav><br>";

    foreach ($row["row"] as $key2 => $row2) {
      echo '<div class="card m-2"><div class="card-header">' . $row2["@attributes"]["name__label"] . '</div><div class="card-body">';
      // echo "<br>" . "----------" . $row2["@attributes"]["name__label"] . "----------" . "<br><br>";
      echo "\n" . '<table><thead><tr><th>Attribute</th><th>Value</th></tr></thead>';
      foreach ($row2["@attributes"] as $key3 => $row3) {
        echo '<tr><td>'. $key3 . "</td><td>" . str_replace("OpaqueRef:", "", $row3) . "</td></tr>";
      }
      echo "</table>";
      echo "</div></div>";
    }
  }
}

?>


<?php
include_once(__DIR__ . "/../pages/footer.php");
?>
