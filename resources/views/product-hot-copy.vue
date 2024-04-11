<template>
  <div class="wrapper">
    <div class="contain-web">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12" style="padding: 0 55px">
            <div class="banner">
              <div class="img-banner">
                <div class="text-banner">
                  <h1 class="m-0">ALL SPEAKERS</h1>
                  <p class="m-0">THƯỞNG THỨC ÂM THANH MARSHALL TẠI NHÀ</p>
                  <p class="m-0">VÀ TRÊN ĐƯỜNG PHỐ</p>
                  <a href="" style="color: white"><span>Shop Now</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contain-product-hot">
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-sm-12 p-0">
          <div class="header-product-hot">
            <h1 class="m-0">SẢN PHẨM HOT</h1>
            <a href=""
              ><span>Xem Tất Cả <i class="fa-solid fa-angle-right"></i></span
            ></a>
          </div>
        </div>
      </div>
      <div class="row" style="margin: 0 55px">
        <div v-for="data in datas" :key="data.id_product" class="col-sm-3">
          <div class="main-product-hot">
            <div class="product-hot">
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
              <div class="content-product-hot">
                <a href="#" style="display: inline-block"
                  ><img src="/image/MARSHALL WOBURN 3-banner.webp" alt=""
                /></a>
                <div class="text-product-hot">
                  <p class="fw-bold mb-2">{{ data.name }}</p>
                  <a href="" class="mb-2" style="color: #a5a5a5">{{
                    data.name_type_sub
                  }}</a>
                  <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                  <template v-if="data.sale">
                    <del style="color: #a5a5a5"
                      >{{
                        new Intl.NumberFormat("vi-VN", {
                          style: "currency",
                          currency: "VND",
                        }).format(data.price)
                      }}
                    </del>
                    <span class="fw-bold">{{
                      new Intl.NumberFormat("vi-VN", {
                        style: "currency",
                        currency: "VND",
                      }).format(data.price - (data.price * data.sale) / 100)
                    }}</span>
                  </template>
                  <template v-else>
                    <span class="fw-bold">{{ data.price }} ₫</span>
                  </template>

                  <div class="ab-product-hot">
                    <div class="discount">
                      <template v-if="data.sale">
                        <div>
                          <span>-{{ data.sale }}%</span>
                        </div>
                      </template>
                    </div>
                    <div class="hot">
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
                <a href="" class="button-content"
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
  <div class="wrapper-speaker-mobile">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-sm-6 ps-0 pe-0" style="padding-bottom: 80px">
          <img src="image/banner-speaker-mobile.png" alt="" />
        </div>
        <div class="col-sm-6 p-0">
          <div class="content-speaker-right">
            <h1>LOA DI ĐỘNG</h1>
            <p>
              Mang âm thanh đặc trưng của Marshall đi khắp mọi nơi bằng loa di động và giữ
              cho âm nhạc của bạn tiếp tục hàng giờ liền.
            </p>
            <a href=""
              ><span>Xem thêm <i class="fa-solid fa-angle-right"></i></span
            ></a>
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
    const datas = ref([]);

    const getSearch = () => {
      axios
        .get(`http://127.0.0.1:8000/api/`)
        .then(function (response) {
          datas.value = response.data["data-hot"];
          console.log(datas.value);
        })
        .catch(function (error) {
          console.log(error);
        });
    };

    onMounted(getSearch);

    return {
      datas,
    };
  },
});
</script>
