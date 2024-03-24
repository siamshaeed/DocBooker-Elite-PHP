<?php
require_once 'classes/settings_class.php';
$setting= new Setting();
$settingData = $setting->getData();

?>

<div class="header-top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                    <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i><?php echo $settingData['email']?></a></li>
                    <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $settingData['address']?></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <a href="tel:+23-345-67890" >
                        <span>Call Now : </span>
                        <span class="h4"><?php echo $settingData['phone']?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>