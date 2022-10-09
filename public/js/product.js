const formatRupiah = (angka) => {
  var reverse = angka.toString().split("").reverse().join(""),
    ribuan = reverse.match(/\d{1,3}/g);
  ribuan = ribuan.join(".").split("").reverse().join("");
  return ribuan;
};

const getProducts = async () => {
  try {
    const results = await fetch("../data/products.json");
    const data = await results.json();
    const products = data.products;
    return products;
  } catch (err) {
    console.log(err);
  }
};

const productData = document.querySelector(".product__item");

window.addEventListener("DOMContentLoaded", async function () {
  const products = await getProducts();
  displayProductItems(products);
});

const displayProductItems = (items) => {
  let displayProduct = items.map(
    (product) => `
      <div class="card__custom">
      <div class="card__custom--header">
      <a href="./product-detail.html">
        <img
          src=${product.image}
          alt="${product.title}"
        />
      </a>

      </div>
      <div class="card__custom--body">
        <h4>${product.title}</h4>
        <div class="d-flex align-items-center">
          <img
            width="24"
            height="24"
            src="./assets/location.svg"
            alt=""
          />
          <p>&nbsp; ${product.place}</p>
        </div>
        <div class="d-flex my-3">
          <div class="stars">
            <i class="fa fa-star"></i>
          </div>
          <span class="ml-1 ">&nbsp;${product.rating}/5</span>
          <span class="more">  205 Ulasan </span>
        </div>
        <div class="price-info d-flex justify-content-between">
          <p class="price-title">IDR ${formatRupiah(product.price)}</p>
          <p class="price-status ${
            product.status === "Tiket Tersedia" ? "available" : "unavailable"
          }">${product.status}</p>
        </div>
      </div>
    </div>

    `
  );
  displayProduct = displayProduct.join("");
  if (productData) {
    productData.innerHTML = displayProduct;
  }
};
