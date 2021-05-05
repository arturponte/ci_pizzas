
<div class="container py-5">
    
    <img src="<?php echo base_url(); ?>assets/pizza.svg" alt="">
    <h2 class="pt-3"><?php echo $pizza['name']; ?></h2>
    <div>
        <strong><?php echo $pizza['ingredients']; ?></strong>
    </div>
    <small>Posted on: <?php echo $pizza['created_at']; ?></small>

    <hr />

    <a class="btn btn-info float-left mr-2" href="<?php echo base_url(); ?>pizzas/edit/<?php echo $pizza['id']; ?>">Edit Pizza</a>

    <?php echo form_open('/pizzas/delete/'.$pizza['id']); ?>
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

</div>