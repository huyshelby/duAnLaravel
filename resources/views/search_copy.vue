<template>
  <div class="contain-search">
    <div class="container-fluid">
      <div class="row" style="margin: 0 55px">
        <div class="col-sm-12 p-0">
          <div class="path-search">
            <span style="color: #a5a5a5">Trang chủ</span> /
            <span style="font-weight: 500">Kết quả tìm kiếm cho "Key ở chỗ này"</span>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="filter-search"></div>
        </div>
        <div class="col-sm-9">
          <div class="result-search">
            <div class="key-search">
              <h2>Kết quả tìm kiếm cho "Key ở chỗ này "</h2>
            </div>
            <div class="product-search">
              <div class="row">
                <div
                  class="col-sm-3 mb-4"
                  v-for="(product) in products"
                  :key="product.id_product"
                >
                  <div class="main-product-search">
                    <div class="product-search">
                      <div class="ab-product-right">
                        <div class="ab-compare">
                          <span><i class="fa-solid fa-shuffle"></i></span>
                        </div>
                        <div class="ab-search">
                          <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <div class="ab-heart">
                          <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                      </div>
                      <div class="content-product-search">
                        <a href=""><img src="/image/{{ product.img_main }}" alt="" /></a>
                        <div class="text-product-search">
                          <p class="fw-bold mb-2">{{ product.name }}</p>
                          <a href="" class="mb-2" style="color: #a5a5a5">{{
                            product.name_type_sub
                          }}</a>
                          <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                          <del v-if="product.sale" style="color: #a5a5a5">{{
                            product.price
                          }}</del>
                          <span class="fw-bold"
                            >{{ product.price - (product.price * product.sale) / 100 }}
                          </span>
                          <br />

                          <span class="fw-bold">{{ product.price }}</span>
                          <br />

                          <div class="ab-product-search">
                            <div v-if="product.sale" class="discount">
                              <div>
                                <span>-{{ product.sale }}%</span>
                              </div>
                            </div>

                            <div v-if="product.view > 0" class="hot">
                              <div>
                                <span>HOT</span>
                              </div>
                            </div>
                            <div class="new">
                              <div>
                                <span>NEW</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="buy-now mt-2">
                        <a href=""
                          ><span>
                            <p class="m-0">Lựa Chọn Các Tùy Chọn</p>
                            <i class="fa-solid fa-cart-shopping"></i> </span
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref, onMounted } from "vue";

export default defineComponent({
  setup() {
    const products = ref([]);

    const getSearch = () => {
      axios
        .get(`http://127.0.0.1:8000/api/product/search`)
        .then(function (response) {
          products.value = response.data.data;
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    };

    onMounted(getSearch);

    return {
      products
    };
  },
});
</script>
