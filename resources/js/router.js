import routes from './routes'
import VueRouter from 'vue-router'

export default new VueRouter({
  abstract: true,
  mode: 'history',
  routes,
  scrollBehavior () {
    return { x: 0, y: 0 }
  }
})
