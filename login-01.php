<?php

    include 'noheader.php';

?>

<?php
require('dbconnect.php');//データベースへの接続

error_reporting(0);

session_start();

if (!empty($_POST)) {//ログイン処理
    if ($_POST['email'] != '' && $_POST['password'] != '') {
        $sql = sprintf('SELECT * FROM members WHERE email="%s" AND password="%s"',
          mysqli_real_escape_string($db, $_POST['email']),
          mysqli_real_escape_string($db, sha1($_POST['password'])));
        $recode = mysqli_query($db, $sql) or die(mysqli_error($db));
        if ($table = mysqli_fetch_assoc($recode)) {//ログイン成功
          $_SESSION['id'] = $table['id'];
          $_SESSION['time'] = time();
          header('Location: top.php');
          exit();
        }
        else {
          $error['login'] = 'failed';
        }
    } 
    else {
        $error['login'] = 'blank';
    }
}
?>
<?php
  //入力画面表示画面
  //function inputForm() {}
?>

	<div id="login-01-01" class="uk-container uk-container-center">
        <h2 class="white-panel tit">ログイン</h2>
    </div>

    <div id="register-01-02" class="uk-container register-form">
        <div class="uk-container-center white-panel">
            <p>次のフォームに必要事項をご記入ください。</p>
            <form action="" method="post">
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">メールアドレス</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="text" name="email" size="" maxlength="255" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');?>" />
                            <?php if ($error['email'] == 'blank'): ?>
                            <p class="error">* メールアドレスを入力してください</p>
                            <?php endif; ?>
                            <?php if ($error['email'] == 'duplicate'): ?>
                            <p class="error">*指定されたメールアドレスは既に登録されています /<p>
                            <?php endif; ?>
                            </p>
                        </td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">パスワード</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="password" name="password" size="" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');?>" />
                            <?php if ($error['password'] == 'blank'): ?>
                            <p class="error">* パスワードを入力してください</p>
                            <?php endif; ?>
                            <?php if ($error['password'] == 'length'): ?>
                            <p class="error">* パスワードは6文字以上で入力してください</p><!--ここが反映されていない-->
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <div class="submit">
                    <input type="submit" value="ログインする" />
                </div>
            </form>
        </div>
    </div>



<?php

    include 'footer.php';

?>