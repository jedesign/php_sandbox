<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mailto = 'marco.rieser@jedesign.ch';

    $subject = 'New Message from ' . htmlspecialchars($_POST['name']);

    $message = <<<MSG
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>New Message from {$_POST['name']}</title>
</head>
<body>
  <p>The following information were left:</p>
  <table>
    <tr>
      <td>Name: </td><td>{$_POST['name']}</td>
    </tr>
    <tr>
      <td>Email: </td><td><a href="mailto:{$_POST['email']}">{$_POST['email']}</a></td>
    </tr>
    <tr>
      <td colspan="2">{$_POST['message']}</td>
    </tr>
  </table>
</body>
</html>
MSG;

    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $header .= 'From: PHP Course Mailer <noreply@phpcourse.local>' . "\r\n";
    $header .= 'Reply-To: ' . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";

    if (mail($mailto, $subject, $message, $header)) {
        $status = 'Thanks for the mail.';
    } else {
        $status = 'Mail could not be sent.';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Contact Form</h1>

<form action="" method="post" novalidate>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"/>
    <br/>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email"/>
    <br/>
    <label for="message">Message:</label><br/>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br/>
    <input type="submit" value="Go!" name="submit"/>
</form>
<br/>
<?php if (isset($status)) {
    echo $status;
} ?>
</body>
</html>