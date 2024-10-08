<footer>
  <p>&copy; Company 2024</p>
</footer>

</div> <!-- /container -->
<div class="row">
  <div class="col-md-4">
    <?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'DoubleCounter.php';
    $counter = new DoubleCounter(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter');
    $counter->increment();
    $views = $counter->get();
    ?>
    There is <?= $views ?> view<?php if ($views > 1) : ?>s<?php endif; ?> on the site
  </div>
  <div class="col-md-4">
    <form action="/newsletter.php" method="post" class="form-inline">
      <div class="form-group">
        <input type="email" name="email" placeholder="Entre your email" class="form-control" value="<?= isset($email) ? htmlentities($email) : '' ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
  <div class="col-md-4">
    <h5>Navigation</h5>
    <ul class="list-unstyled text-small">
      <?= nav_menu('nav-link') ?>
    </ul>
  </div>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QnZ1B0LPt2MlRex2I1OR5ti/Tu4F5YlplBz3Jy0FF3J66Y/tEV5wi9aTgaRUzRYm" crossorigin="anonymous"></script>

</body>

</html>