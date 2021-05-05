
<div class="container py-5">

    <h2><?php echo $title; ?></h2>

    <!-- LOOP DE TODAS AS PIZZAS -->

    <?php foreach($pizzas as $pizza) { ?>

        <div class="pizza-box">
            <h4><?php echo $pizza['name']; ?></h4>
            <small>Posted on: <?php echo $pizza['created_at']; ?></small>
            <p><strong><?php echo $pizza['ingredients']; ?></strong></p>
            <p class="pt-2"><a href="<?php echo site_url('/pizzas/'.$pizza['id']); ?>">Read More</a></p>
        </div>

    <?php } ?>

</div>