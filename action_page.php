<?PHP

session_start();

$username = $_POST['dev_id'];

if ($username == "letmein") {

print ("Welcome back, friend!");

}
else {

print ("You're not a member of this site");

}
unset($_SESSION['dev_id']);

?>