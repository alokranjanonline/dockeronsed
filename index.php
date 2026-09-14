<?php
//phpinfo();
echo "<p>My php version is: " . phpversion() . "</p>";
echo "<p>This is test from docker and </p>";
echo "<p>Welcome to my website</p>";
echo "<p>This is a simple PHP script running in a Docker container.</p>";
echo "<p>You can customize this page to display your own content.</p>";
echo "<p>Feel free to modify the code and add your own features.</p>";
echo "<p>Thank you for visiting!</p>";
echo "<p>My hostname is: " . gethostname() . "</p>";
echo "<p>My server software is: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>My server name is: " . $_SERVER['SERVER_NAME'] . "</p>";
?>
<a href="hello.php">Click here to go to hello.php</a>