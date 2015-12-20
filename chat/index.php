<?php

  include 'header_chat.php';

?>

  <div class="uk-container uk-container-center">
      <h1 class="white-panel tit" id="pg_head">
        SLC chat
      </h1>
  </div>


  <div id="chat-01" class="uk-container ">
      <div class="white-panel">
          <div ng-view></div>
      </div>
  </div>
  

<?php

  include 'footer_chat.php';

?>