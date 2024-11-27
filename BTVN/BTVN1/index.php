<?php 
include 'header.php';
include 'data.php';
?>
<main>
    <div class="container">
        <button id="btnAddProduct" class="add-btn">Thêm mới</button>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <button class="editProductBtn" data-id="<?= $product['id'] ?>"
                            data-name="<?= $product['name'] ?>" data-price="<?= $product['price'] ?>">✏️</button>
                    </td>
                    <td>
                        <button class="deleteProductBtn" data-id="<?= $product['id'] ?>">🗑️</button>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>

<?php include './footer.php' ?>