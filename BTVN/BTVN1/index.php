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
                <?php if(!isset($products) || !is_array($products)){
                    echo "Dữ liệu không hợp lệ";
                    exit;
                } ?>
                <?php foreach ($products as $matHang): ?>
                <tr>
                    <td><?= $matHang['name'] ?></td>
                    <td><?= $matHang['price'] ?></td>
                    <td>
                        <button class="editProductBtn" data-id="<?= $matHang['id'] ?>"
                            data-name="<?= $matHang['name'] ?>" data-price="<?= $matHang['price'] ?>">✏️</button>
                    </td>
                    <td>
                        <button class="deleteProductBtn" data-id="<?= $matHang['id'] ?>">🗑️</button>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>

<?php include './footer.php' ?>