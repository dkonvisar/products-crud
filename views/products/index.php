<header class="container">
    <div class="row my-5">
        <div class="col">
            <h1>Product List</h1>
            <a href="/products/create" class="btn btn-success my-2">Create</a>
        </div>
    </div>
</header>
<main class="container">
    <div class="row">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for products" name="search"
                       value="<?php echo $search ?>">
                <button class="btn btn-outline-secondary" type="button">Search</button>
            </div>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $i => $product): ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td>
                        <?php if ($product['image']): ?>
                            <img src="/<?php echo $product['image'] ?>" class="thumb-image"></td>
                        <?php endif; ?>
                    <td><?php echo $product['title'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['create_date']; ?></td>
                    <td>
                        <a href="/products/update?id=<?php echo $product['id'] ?>" type="button"
                           class="btn btn-primary">Edit</a>
                        <form class="d-inline-block" action="/products/delete" method="post">
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
