<template>
  <div>
    <div class="box">
      test
    </div>
  </div>
</template>

<script>
export default {
  mounted () {
    console.log('vueFile')
  }
}
</script>

<style lang="scss" scoped>
@import "../../_css/variables/variable";
@import "../../_css/variables/mixin";

.box {
  display: flex;
  color: $color-brand;
}
</style>
