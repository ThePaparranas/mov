<template>
  <div>
    <div class="cover absolute flex w-full z-40 mx-auto">
      <p
        v-if="!linkTo"
        class="w-full text-3xl text-white opacity-60 self-center text-center"
      >
        {{ caption }}
      </p>

      <p v-else>
        <router-link :to="linkTo">
          <span class="w-full text-3xl text-white opacity-60 self-center text-center">{{ caption }}</span>
        </router-link>
      </p>
    </div>

    <div class="w-full self-center bg-gray-600">
      <img
        :src="img"
        class="cover w-full object-cover object-bottom opacity-50"
      >
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeroImg',

  props: {
    img: {
      required: false,
      type: String,
      default: '/img/hero/default-cover.jpg'
    },

    caption: {
      required: false,
      type: String,
      default: ''
    },

    linkTo: {
      required: false,
      type: String,
      default: null
    }
  }
}
</script>
