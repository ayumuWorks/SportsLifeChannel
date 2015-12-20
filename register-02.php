<?php

    include 'noheader.php';

?>

<?php

require('dbconnect.php');//dbconnect.phpの呼び出し→データベースに接続

session_start();//記録の保持

if (!isset($_SESSION['sports-fan-media'])) {
   header('Location: register-01.php');
   exit();
 }

?>

    <div id="register-02-01" class="uk-container uk-container-center">
        <h2 class="white-panel tit">会員登録確認</h2>
    </div>

    <div id="register-02-02" class="uk-container register-form">
        <div class="uk-container-center white-panel">
            <p>次のフォームに必要事項をご記入ください。</p>
            <form action="register-03.php" method="post">
                <h3>お客様情報</h3>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">名前</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%"><?php echo htmlspecialchars($_SESSION['sports-fan-media']['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">性別</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">男</td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">年齢</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">22</td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">好きなスポーツ</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">野球</td>
                    </tr>
                </table>

                <h3>ログインに必要な情報</h3>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center" width="40%">メールアドレス</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%"><?php echo htmlspecialchars($_SESSION['sports-fan-media']['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                </table>
                <table align="center" cellspacing="0" cellpadding="25" width="80%">
                    <tr>
                        <td class="white-font" bgcolor="#8ba6f4" align="center" width="40%">パスワード</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">【表示されません】</td>
                    </tr>
                </table>
                <div class="submit">
                    <input type="submit" value="登録する" />
                </div>
            </form>
        </div>
    </div>

<?php

    include 'footer.php';

?>