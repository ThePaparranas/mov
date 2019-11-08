import Home from './pages/home'
import News from './pages/News'
import Admin from './pages/admin'
import Filmes from './pages/filmes'
import Snews from './pages/news-article'

const routes = [
  {
    path: '/',
    component: Home,
    name: 'Home',
    meta: {
      name: 'Home',
      menuClass: 'transparent',
      access: 'user',
      isNav: true
    }
  },
  {
    path: '/filmes',
    component: Filmes,
    name: 'Movies',
    meta: {
      name: 'Filmes',
      menuClass: 'white',
      access: 'user',
      isNav: true
    }
  },
  {
    path: '/news',
    component: News,
    name: 'News',
    meta: {
      name: 'Notícias',
      menuClass: 'white',
      access: 'user',
      isNav: true
    }
  },
  {
    path: '/news/:slug',
    component: Snews,
    name: 'NewsArticle',
    props: true,
    meta: {
      name: 'Notícia',
      menuClass: 'white',
      access: 'user',
      isNav: false
    }
  },
  // Admin
  {
    path: '/admin',
    component: Admin,
    meta: {
      name: 'Admin',
      menuClass: 'white',
      access: 'admin',
      isNav: true
    }
  }
]

export default routes
