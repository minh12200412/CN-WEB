<?php 
include 'header.php';
include 'data.php';
include 'logic.php';
?>
<main>
    <div class="container">
        <button id="btnAddProduct" class="add-btn">Thêm</button>
        <div id="addModal" class="modal">
            <div class="contentModal">
                <h2>Thêm sản phẩm mới</h2>
                <span class="close" data-close-modal="addModal">Thoát</span>
                <form method="POST">
                    <input type="hidden" name="action" value="addSp">
                    <input type="text" name="nameSp" placeholder="Tên của sản phẩm" required>
                    <input type="text" name="priceSp" placeholder="Giá của sản phẩm" required>
                    <button type="submit">Thêm mới sản phẩm</button>
                </form>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Sửa sản phẩm </th>
                    <th>Xóa sản phẩm</th>
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
                        <div id="editProductModal" class="modal">
                            <div class="contentModal">
                                <span class="close" data-close-modal="editProductModal">Thoát</span>
                                <h2>Chỉnh sửa</h2>
                                <form method="POST" id="editProductForm">
                                    <input type="hidden" name="action" value="edit">
                                    <input type="hidden" name="id" id="editProductId">
                                    <input type="text" name="name" id="editProductName" required>
                                    <input type="text" name="price" id="editProductPrice" required>
                                    <button type="submit">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button class="deleteProductBtn" data-id="<?= $product['id'] ?>">🗑️</button>
                        <div id="deleteProductModal" class="modal">
                            <div class="contentModal">
                                <span class="close" data-close-modal="deleteProductModal">Thoát</span>
                                <h2>Xoá</h2>
                                <form method="POST" id="deleteProductForm">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" id="deleteProductId">
                                    <p>Bạn có muốn xoá sản phẩm không</p>
                                    <button type="submit">Xác nhận có xoá</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>

<?php include 'footer.php' ?>