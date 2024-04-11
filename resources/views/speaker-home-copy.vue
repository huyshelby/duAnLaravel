<template>
  <div class="contain-speaker">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-sm-6">
          <div class="content-speaker-home-left">
            <img src="image/speaker-home.png" alt="" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="content-speaker-home-right">
            <h1>LOA NGHE TRONG NHÀ</h1>
            <p>
              Đắm chìm trong âm nhạc của bạn và trải nghiệm âm thanh sân khấu lớn trong sự
              thoải mái tại nhà của bạn.
            </p>
            <a href=""
              ><span>Xem thêm <i class="fa-solid fa-angle-right"></i></span
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="contain-speaker-product pt-5">
      <div class="container-fluid p-0">
        <div class="row" style="margin: 0 55px">
          <div v-for="data in dataSpeaker" :key="data.id_product" class="col-sm-3">
            <div class="main-product-hot">
              <div class="product-hot">
                <div class="ab-product-home-right">
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
                  <img src="/image/MARSHALL STANMORE 3-banner.webp" alt="" />
                  <div class="text-product-hot">
                    <p class="fw-bold mb-2">{{ data.name }}</p>
                    <a href="" class="mb-2" style="color: #a5a5a5">{{
                      data.name_type_sub
                    }}</a>
                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                    <template v-if="data.sale">
                      <del style="color: #a5a5a5">{{
                        new Intl.NumberFormat("vi-VN", {
                          style: "currency",
                          currency: "VND",
                        }).format(data.price)
                      }}</del>
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
                    <!-- <br />

                    <br /> -->

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
</template>

<script>
import { defineComponent, ref, onMounted } from "vue";

export default defineComponent({
  setup() {
    const dataSpeaker = ref([]);

    const getSearch = () => {
      axios
        .get(`http://127.0.0.1:8000/api/`)
        .then(function (response) {
          dataSpeaker.value = response.data["data-speaker"];
          console.log(dataSpeaker.value);
        })
        .catch(function (error) {
          console.log(error);
        });
    };

    onMounted(getSearch);

    return {
      dataSpeaker,
    };
  },
});
</script>
