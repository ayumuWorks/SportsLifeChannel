<?php

require('dbconnect.php');//dbconnect.phpの呼び出し→データベースに接続

error_reporting(0);

session_start();//記録の保持

$sql = sprintf('INSERT INTO members SET name="%s", email="%s", password="%s"',//SQLの作成
mysqli_real_escape_string($db, $_SESSION['sports-fan-media']['name']),//無害化処置
mysqli_real_escape_string($db, $_SESSION['sports-fan-media']['email']),
mysqli_real_escape_string($db, sha1($_SESSION['sports-fan-media']['password']))//パスワードは暗号化
);
mysqli_query($db, $sql);

unset($_SESSION['sports-fan-media']);//セッション削除
?>

<?php

    include 'noheader.php';

?>

<!DOCTYPE html>


       <h1></h1>
       <p>ユーザー登録が完了しました</p>
       <p><a href="login-01.php">ログインする</a></p>

<?php

    include 'footer.php';

?>