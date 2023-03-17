<form action="" method="post" enctype="multipart/form-data">
    <?php if ($product['image']): ?>
        <div class="mb-3">
            <img class="update-image" src="/<?php echo $product['image']; ?>">
        </div>
    <?php endif; ?>

    <div class="mb-3">
        <label class="form-label">Product image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Product title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $product['title']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Product description</label>
        <textarea class="form-control" name="description"><?php echo $product['description']; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Product price</label>
        <input type="number" step=".1" name="price" class="form-control" value="<?php echo $product['price']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>