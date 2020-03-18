<?php 	
$name = "";
$cardnumber = "";
$section = "";
$cardval = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $cardnumber = isset($_POST["cardnumber"]) ? $_POST["cardnumber"] : "";
  $section = isset($_POST["section"]) ? $_POST["section"] : "";
  $cardval = isset($_POST["card"]) ? $_POST["card"] : "";
}

// $valid=true;


// if (!($_POST["name"] || $_POST["name"]===NULL)==NULL) {
//   $valid=false;
// }
// if (!($_POST["section"] || $_POST["section"]===NULL)==NULL) {
//   $valid=false;
// }
// if (!($_POST["cardnumber"] || $_POST["cardnumber"]===NULL)==NULL) {
//   $valid=false;
// }
// if (!($_POST["card"] || $_POST["card"]===NULL)==NULL) {
//   $valid=false;


// function test_input($data){
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }

$file = 'sucker.txt';
$arrayName = array($name, $section, $cardnumber, $cardval, "\n" );
$date = implode(";", $arrayName);

file_put_contents($file, $date, FILE_APPEND | LOCK_EX);

$suckerf = file_get_contents($file);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>

    <dl>
      <dt>Name</dt>
      <dd> <?php echo $name; ?> </dd>

      <dt>Section</dt>
      <dd> <?php echo $section; ?> </dd>

      <dt>Credit Card</dt>
      <dd> <?php echo $cardnumber; ?></dd>
      <dd> (<?php echo $cardval; ?>)</dd>
    </dl>
    <p>Here are all the suckers who have submitted here:</p>	
	<?php echo $suckerf; ?>
	
  	<p><a href="buyagrade.php">Try again</a></p>
  </body>
</html>

