<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Imge</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Color</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach ($result as $key=> $product ) :?>
                <tr>
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><img src="view/uploads/<?php echo $product->getImg() ?>" style="width: 100px; height: 100px" alt="Đếu có ảnh"></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getTrademark() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getAmount() ?></td>
                    <td><?php echo $product->getStatus()?></td>
                    <td><?php echo $product->getColor() ?></td>
                    <td><a href="home.php?page=product&action=delete&id=<?php echo $product->getId(); ?>"
                           class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                        <a href="home.php?page=product&action=edit&id=<?php echo $product->getId(); ?>" class="btn btn-primary btn-sm">Update</a>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>
