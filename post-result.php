<?php
$pageTitle = "Post result";
include "view-header.php";
?>

<h1>Post result</h1>
<?php
echo getDisplay(); // Added missing semicolon

include "view-footer.php";

function getDisplay() {
  if (isset($_POST["my-name"])) {
    // Return the full string with the value from POST
    return "<p>The value sent is: " . htmlspecialchars($_POST["my-name"]) . "</p>"; 
  } else {
    return "<p>Nothing posted to the page.</p>";
  }
}
?>
