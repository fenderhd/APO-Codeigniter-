<?php $this->load->view('/shared/head'); ?>
<body>
  <div class="container">
    <?php
    $this->load->view('/posts/' . $view);
    $this->load->view('/shared/footer');
    ?>
  </div>
</body>