<template>
    <div class="flex flex-col w-1/4 bg-white rounded p-4 m-2 flex-no-grow">
        <span class="text-xl font-bold">Categorias</span>

        <ul class="w-full">
            <li class=""
                v-for="cat in cats"
                :key="cat.id">
                <button :class="bClass(cat.name)"
                        @click="changeFilter(cat)">{{ cat.name }}
                    <check v-if="currentFilter.includes(cat.name)"></check></button>
            </li>
        </ul>
    </div>
</template>

<script>
  import check from 'vue-material-design-icons/Check'

  export default {
    components: {
      check
    },

    data () {
      return {
        currentFilter: [],
        currentFilterIdx: []
      }
    },

    methods: {
      bClass (cat) {
        let baseClass = ' my-2 w-100 hover:bg-red-1000 bg-fade text-xs hover:text-white py-2 px-4 rounded'
        let activeClass = this.currentFilter.includes(cat) ? ' bg-red-1000 text-white' : ' bg-gray-200'

        return baseClass + activeClass
      },

      changeFilter (cat) {
        if (this.currentFilter.includes(cat.name)) {
          let fltrIdx = this.currentFilter.indexOf(cat.name)
          this.currentFilter.splice(fltrIdx, 1)
          this.currentFilterIdx.splice(fltrIdx, 1)
        } else {
          this.currentFilter.push(cat.name)
          this.currentFilterIdx.push(cat.id.toString())
        }
      }
    },

    watch: {
      currentFilter (f) {
        this.$emit('change', [f, this.currentFilterIdx])
      }
    },

    name: 'ArticlesFilter',

    props: {
      cats: {
        type: Array,
        required: true
      }
    }
  }
</script>

<style lang="sass" scoped>

</style>
