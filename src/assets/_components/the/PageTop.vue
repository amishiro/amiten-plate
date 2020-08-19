<template>
  <div>
    <a
      v-scroll-to="'#app'"
      href="#"
      class="the-page-top"
    ><i class="material-icons">keyboard_arrow_up</i></a>
  </div>
</template>

<style lang="scss">
.the-page-top {
  position: relative;
  box-sizing: border-box;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  margin: 0 auto;
  margin-bottom: $gap-l;
  color: $color-brand;
  text-decoration: none;
  background-color: $color-light;
  border-radius: 50%;

  &:hover {
    color: $white;
    background-color: $color-brand;
  }
}

</style>
