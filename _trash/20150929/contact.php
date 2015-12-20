<?php

    include 'header.php';

?>

<?php
require('dbconnect.php');//データベースへの接続

error_reporting(0);

session_start();

?>

	<div id="contact-01" class="uk-container uk-container-center">
        <h2 class="white-panel tit">お問い合わせ</h2>
    </div>

    <div id="register-01-02" class="uk-container register-form">
        <div class="uk-container-center white-panel">
            <p>次のフォームに必要事項をご記入ください。</p>
            <form action="" method="post">
                <h3>お問い合わせ情報入力</h3>
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
                        <td class="white-font" bgcolor="#8ba6f4" align="center"  width="40%">意見</td>
                        <td bgcolor="#e9f0f2" valign="top" width="60%">
                            <textarea type="text" name="" size="" value="" rows="7" cols="" ></textarea>
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