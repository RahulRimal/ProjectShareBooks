<?php include('core/init.php'); ?>

<?php
if(isset($_POST['doLogin']))
{
    $userEmail = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $user = new User();

    if($user->login($userEmail, $password))
        redirect('index.php', 'You have been Logged In Successfully !!', 'success');
    else
        redirect('index.php', 'Couldn\'t log you In !!', 'error');

}
else
    redirect('index.php');
?>