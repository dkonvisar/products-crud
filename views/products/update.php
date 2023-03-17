<header>
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <a href="/products" class="btn btn-info my-5">Go Back to Products</a>
                <h1>Update <i class="text-primary-emphasis">"<?php echo $product['title'] ?>"</i></h1>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="row">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <div><?php echo $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php include_once '_form.php' ?>
        </div>
    </div>
</main>