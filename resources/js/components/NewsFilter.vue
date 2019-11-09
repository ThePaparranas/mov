<template>
    <div class="flex flex-col w-1/4 bg-white rounded p-4 m-2 flex-no-grow">
        <span class="text-xl font-bold">Categorias</span>

        <ul class="w-full">
            <li class=""
                v-for="cat in cats"
                :key="cat.id">
                <button :class="bClass(cat.name)"
                        @click="changeFilter(cat.name)">{{ cat.name }}
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
        currentFilter: []
      }
    },

    methods: {
      bClass (cat) {
        let baseClass = ' my-2 w-100 hover:bg-blue-500 bg-fade font-semibold hover:text-blue-100 py-2 px-4 border border-blue-600 rounded'
        let activeClass = this.currentFilter.includes(cat) ? ' bg-blue-500 text-blue-100' : ' text-blue-700 bg-blue-200'

        return baseClass + activeClass
      },

      changeFilter (cat) {
        if (this.currentFilter.includes(cat)) {
          let idx = this.currentFilter.indexOf(cat)
          this.currentFilter.splice(idx, 1)
        } else {
          this.currentFilter.push(cat)
        }
      }
    },

    watch: {
      currentFilter (f) {
        this.$emit('change', f)
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
