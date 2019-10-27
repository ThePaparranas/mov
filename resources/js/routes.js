import VueRouter from 'vue-router'
import Home from './pages/home'
import Filmes from './pages/filmes'

let routes = [
    {
        path: '/',
        component: Home,
        meta: {
            name: 'Home',
            menuClass: 'transparent'
        }
    },
    {
        path: '/filmes',
        component: Filmes,
        meta: {
            name: 'Filmes',
            menuClass: 'white'
        }
    }
]

export default new VueRouter({
    abstract: true,
    mode: 'history',
    routes,
    scrollBehavior () {
      return { x: 0, y: 0 }
    }
  })
