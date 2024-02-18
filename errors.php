<?php  if (count($errors) > 0) : ?>
  <div class="error">
        <?php foreach ($errors as $error) : ?>
          <div class="wrapper">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                <p class="alert alert-danger"><?php echo $error ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
  </div>
<?php  endif ?>