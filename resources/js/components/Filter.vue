<template>
  <div class="flex flex-col w-1/4 bg-white rounded p-4 m-2 flex-no-grow shadow-md">
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
          <check
            v-if="currentFilter.includes(cat.name)"
            title="Seleccionado"
          />
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
    },

    title: {
      required: false,
      type: String,
      default: 'Filtro'
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
      const baseClass = ' my-2 w-100 hover:bg-red-1000 bg-fade text-xs hover:text-white py-2 px-4 rounded'
      const activeClass = this.currentFilter.includes(cat) ? ' bg-red-1000 text-white' : ' bg-gray-200'

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
