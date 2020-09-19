<?php $this->load->view('/shared/head'); ?>
<body>
  <div class="container">
    <?php
    $this->load->view('/home/' . $view);
    $this->load->view('/shared/footer');
    ?>
  </div>
</body>