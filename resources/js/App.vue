<template>
  <TheHeader />
  <router-view></router-view>
  <router-view name="speaker"></router-view>
  <TheFooter />
</template>
<script>
import { defineComponent, ref, onMounted } from "vue";
import TheHeader from "../component/TheHeader.vue";
import TheFooter from "../component/TheFooter.vue";
export default {
  components: {
    TheHeader,
    TheFooter,
  },
};
</script>
