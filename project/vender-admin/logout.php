<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

    //header('Location: index.php'); // default page
?>
<script type="text/javascript">alert("Logout completed successfully..."); window.location="../index.php";</script>
</html>