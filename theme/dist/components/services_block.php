<?php

$services_block = get_field('services_block');

?>

<section class="services-holder">
    <div class="details-holder">
    <h2 class="services-headline"><?php echo $services_block['services_headline']; ?></h2>
    <p class="services-details"><?php echo $services_block['services_details_1']; ?></p>
    <p class="services-details"><?php echo $services_block['services_details_2']; ?></p>
    <p class="services-details"><?php echo $services_block['services_details_3']; ?></p>
    </div>
    <img class="services-img" src="<?php echo $services_block['services_img']; ?>">
</section>





