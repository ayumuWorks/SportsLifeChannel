<?php

    include 'header.php';

?>

<?php
require('dbconnect.php');//データベースへの接続

error_reporting(0);

session_start();

if (!empty($_POST)) {
  //エラー項目の確認
   if ($_POST['name'] == '') {
     $error['name'] = 'blank';
   }
   if ($_POST['email'] == '') {
     $error['email'] = 'blank';
   }
   if ($_POST['password'] < 6) {
     $error['password'] = 'length';
   }
   if ($_POST['password'] == '') {
     $error['password'] = 'blank';
   }

   if (empty($error)) {
     $_SESSION['sports-fan-media'] = $_POST;//joinじゃなくてsports-fan-mediaかも
     header('Location: register-02.php'); 
     exit();
   }
   //重複アカウントのチェック
   if (empty($error)) {
     $sql = sprintf('SELECT COUNT(*) AS cnt FROM members WHERE email="%s"',
     mysqli_real_escape_string($db,$_POST['email']));
     $recode = mysqli_query($db,$sql) or die(mysqli_error($db));
     $table = mysqli_fetch_assoc($recode);
     if ($table['cnt'] > 0) {
       $error['email'] = 'duplicate';
     }
   }
 }

//書き直しのとこ
if ($_REQUEST['action'] == 'rewrite') {//Noticeエラーが出ている
  $_POST = $_SESSION['sports-fan-media'];
  //$error['rewrite'] = true;
}
?>


    <div id="register-01-01" class="uk-container uk-container-center">
        <h2 class="white-panel tit">会員登録</h2>
    </div>

    <div id="register-01-02" class="uk-container register-form">
        <div class="uk-container-center white-panel">
            <p>次のフォームに必要事項をご記入ください。</p>
            <form action="" method="post">
                <h3>お客様情報</h3>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center" width="40%">名前</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="text" name="name" size="" maxlength="255" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');?>" />
                            <?php if ($error['name'] == 'blank'): ?>
                            <p class="error">* ニックネームを入力してください</p>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">性別</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="radio" name="sex" value="男" checked>男
                            <input type="radio" name="sex" value="女">女
                        </td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">年齢</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="text" name="age" size="3" maxlength="255" value="" />歳
                        </td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">好きなスポーツ</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <input type="text" name="sport" size="" maxlength="255" value="" />
                        </td>
                    </tr>
                </table>

                <h3>ログインに必要な情報</h3>
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
                    <input type="submit" value="入力内容を確認する" />
                </div>
            </form>
        </div>
    </div>

<?php

    include 'footer.php';

?>