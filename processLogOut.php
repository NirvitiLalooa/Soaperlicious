<html>

<?php

include ("myConn.php");
SESSION_START();
SESSION_DESTROY();

echo"<script language=javascript> location.href='index.php'</script>";
?>
</body>
</html>