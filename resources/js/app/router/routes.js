const routes = [
  {
    path: '/',
    component: () => import(/* webpackChunkName: "front" */ '../../front/home/ui/home'),
    name: 'Home',
    meta: {
      name: 'Home',
      menuClass: 'transparent',
      access: 'user',
      isNav: true,
      isAside: false,
      description: 'Filmes, Séries, Animes, Notícias sobre a 7º arte'
    }
  },
  {
    path: '/filmes',
    component: () => import(/* webpackChunkName: "front" */ '../../front/movies/ui/filmes'),
    name: 'Movies',
    meta: {
      name: 'Filmes',
      menuClass: 'white',
      access: 'user',
      isNav: true,
      isAside: false,
      description: 'Os teus filmes favoritos'
    }
  },
  {
    path: '/filmes/:slug',
    component: () => import(/* webpackChunkName: "front" */ '../../front/movies/ui/filme'),
    name: 'Movie',
    meta: {
      name: 'Filme',
      menuClass: 'white',
      access: 'user',
      isNav: false,
      isAside: false,
      description: 'Os teus filmes favoritos'
    }
  },
  {
    path: '/news',
    component: () => import(/* webpackChunkName: "front" */ '../../front/news/ui/news'),
    name: 'News',
    meta: {
      name: 'Notícias',
      menuClass: 'white',
      access: 'user',
      isNav: true,
      isAside: false,
      description: 'As últimas notícias sobre a 7ª arte'
    }
  },
  {
    path: '/news/:slug',
    component: () => import(/* webpackChunkName: "front" */ '../../front/news/ui/news-article'),
    name: 'NewsArticle',
    props: true,
    meta: {
      name: 'Notícia',
      menuClass: 'white',
      access: 'user',
      isNav: false,
      isAside: false,
      description: ''
    }
  },
  // Admin
  {
    path: '/admin',
    component: () => import(/* webpackChunkName: "admin" */ '../../admin/home/ui/home'),
    meta: {
      name: 'Admin',
      menuClass: 'white',
      access: 'admin',
      isNav: true,
      isAside: true,
      description: 'Hi boss!'
    }
  },
  {
    path: '/admin/users',
    component: () => import(/* webpackChunkName: "admin" */ '../../admin/users/ui/users'),
    meta: {
      name: 'Users',
      menuClass: 'white',
      access: 'admin',
      isNav: false,
      isAside: true,
      description: ''
    }
  }
]

export default routes

