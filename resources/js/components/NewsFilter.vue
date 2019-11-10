<template>
  <div class="flex flex-col w-1/4 bg-white rounded p-4 m-2 flex-no-grow">
    <span class="text-xl font-bold">Categorias</span>

    <ul class="w-full">
      <li
        v-for="cat in cats"
        :key="cat.id"
        class=""
      >
        <button
          :class="bClass(cat.name)"
          @click="changeFilter(cat)"
        >
          {{ cat.name }}
          <check v-if="currentFilter.includes(cat.name)" />
        </button>
      </li>
    </ul>
  </div>
</template>

<script>
import check from 'vue-material-design-icons/Check'

export default {
  name: 'ArticlesFilter',

  components: {
    check
  },

  props: {
    cats: {
      type: Array,
      required: true
    }
  },

  data () {
    return {
      currentFilter: [],
      currentFilterIdx: []
    }
  },

  watch: {
    currentFilter (f) {
      this.$emit('change', [f, this.currentFilterIdx])
    }
  },

  methods: {
    bClass (cat) {
      const baseClass = ' my-2 w-100 hover:bg-blue-500 bg-fade font-semibold hover:text-blue-100 py-2 px-4 border border-blue-600 rounded'
      const activeClass = this.currentFilter.includes(cat) ? ' bg-blue-500 text-blue-100' : ' text-blue-700 bg-blue-200'

      return baseClass + activeClass
    },

    changeFilter (cat) {
      if (this.currentFilter.includes(cat.name)) {
        const fltrIdx = this.currentFilter.indexOf(cat.name)
        this.currentFilter.splice(fltrIdx, 1)
        this.currentFilterIdx.splice(fltrIdx, 1)
      } else {
        this.currentFilter.push(cat.name)
        this.currentFilterIdx.push(cat.id.toString())
      }
    }
  }
}
</script>

<style lang="sass" scoped>

</style>
