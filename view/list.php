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
                    <th scope="row"><?php echo $product->id ?></th>
                    <td><img src="view/uploads/<?php echo $product->img ?>" style="width: 150px; height: 150px" alt="Đếu có ảnh"></td>
                    <td><?php echo $product->name ?></td>
                    <td><?php echo $product->trademark ?></td>
                    <td><?php echo $product->price  ?></td>
                    <td><?php echo $product->amount ?></td>
                    <td><?php echo $product->status ?></td>
                    <td><?php echo $product->color ?></td>
                    <td>
                        <a href="home.php?page=product&action=edit&id=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="home.php?page=product&action=delete&id=<?php echo $product->id; ?>"
                           class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

