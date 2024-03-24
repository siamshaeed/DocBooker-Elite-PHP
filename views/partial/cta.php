<?php
require_once 'classes/cta_class.php';
$dataobj = new Cta();
$ctaLists = $dataobj->show();
?>

<section class="cta-section">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
              <?php foreach ($ctaLists as $ctaList) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3"><?php echo $ctaList['value'] ?></span>k
                        <p><?php echo $ctaList['title'] ?></p>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>