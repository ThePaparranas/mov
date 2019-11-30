const routes = [
  {
    path: '/',
    component: () => import(/* webpackChunkName: "home" */ './views/home'),
    name: 'Home',
    meta: {
      name: 'Home',
      menuClass: 'transparent',
      access: 'user',
      isNav: true,
      description: ''
    }
  },
  {
    path: '/filmes',
    component: () => import(/* webpackChunkName: "filmes" */ './views/filmes'),
    name: 'Movies',
    meta: {
      name: 'Filmes',
      menuClass: 'white',
      access: 'user',
      isNav: true,
      description: ''
    }
  },
  {
    path: '/news',
    component: () => import(/* webpackChunkName: "news" */ './views/news'),
    name: 'News',
    meta: {
      name: 'Notícias',
      menuClass: 'white',
      access: 'user',
      isNav: true,
      description: ''
    }
  },
  {
    path: '/news/:slug',
    component: () => import(/* webpackChunkName: "article" */ './views/news-article'),
    name: 'NewsArticle',
    props: true,
    meta: {
      name: 'Notícia',
      menuClass: 'white',
      access: 'user',
      isNav: false,
      description: ''
    }
  },
  // Admin
  {
    path: '/admin',
    component: () => import(/* webpackChunkName: "admin" */ './views/admin'),
    meta: {
      name: 'Admin',
      menuClass: 'white',
      access: 'admin',
      isNav: true,
      description: ''
    }
  }
]

export default routes
