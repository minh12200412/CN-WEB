const addProductBtn = document.getElementById("btnAddProduct");
const editProductBtns = document.querySelectorAll(".editProductBtn");
const deleteProductBtns = document.querySelectorAll(".deleteProductBtn");

addProductBtn.addEventListener("click", () => openModal("addModal"));
editProductBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById("editProductId").value = btn.dataset.id;
    document.getElementById("editProductName").value = btn.dataset.name;
    document.getElementById("editProductPrice").value = btn.dataset.price;
    openModal("editProductModal");
  });
});
deleteProductBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById("deleteProductId").value = btn.dataset.id;
    openModal("deleteProductModal");
  });
});

function openModal(modalId) {
  document.getElementById(modalId).style.display = "flex";
}

document.querySelectorAll(".close").forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById(btn.dataset.closeModal).style.display = "none";
  });
});
