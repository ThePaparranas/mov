import Home from './pages/home'
import News from './pages/News'
import Admin from './pages/admin'
import Filmes from './pages/filmes'

const routes = [
  {
    path: '/',
    component: Home,
    meta: {
      name: 'Home',
      menuClass: 'transparent',
      access: 'user'
    }
  },
  {
    path: '/filmes',
    component: Filmes,
    meta: {
      name: 'Filmes',
      menuClass: 'white',
      access: 'user'
    }
  },
  {
    path: '/news',
    component: News,
    meta: {
      name: 'Notícias',
      menuClass: 'white',
      access: 'user'
    }
  },

  // Admin
  {
    path: '/admin',
    component: Admin,
    meta: {
      name: 'Admin',
      menuClass: 'white',
      access: 'admin'
    }
  }
]

export default routes
