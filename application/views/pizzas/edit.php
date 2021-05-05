
<div class="container py-5">
    <h2 class="pb-4"><?php echo $title; ?></h2>

    <!-- FORM -->
    
    <?php echo form_open('pizzas/edit/'.$pizza['id']); ?>

        <input type="hidden" name="pizza-id" value="<?php echo $pizza['id']; ?>">
        
        <div class="form-group">
            <label>Name your pizza:</label>
            <input type="text" class="form-control" name="pizza-name" placeholder="Enter here" value="<? echo $pizza['name']; ?>">
        </div>

        <div class="form-group">
            <label>Ingredients:</label>
            <input type="text" class="form-control" name="pizza-ingredients" placeholder="Enter here" value="<? echo $pizza['ingredients']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- VALIDATION ERRORS -->
    <div class="pt-4 text-danger">
        <?php echo validation_errors(); ?>
    </div>

</div>



