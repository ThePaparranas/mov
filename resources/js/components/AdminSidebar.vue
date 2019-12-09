<template>
  <aside class="admin-nav w-10 md:max-w-xs py-1 px-2">
    <router-link to="/admin">
      <stats-icon title="Stats" />
    </router-link>

    <router-link to="/admin/users">
      <users-icon title="Users" />
    </router-link>

    <movies-icon title="Movies" />

    <news-icon title="News" />
  </aside>
</template>

<script>
import usersIcon from 'vue-material-design-icons/AccountGroup'
import statsIcon from 'vue-material-design-icons/ChartBar'
import moviesIcon from 'vue-material-design-icons/Filmstrip'
import newsIcon from 'vue-material-design-icons/Newspaper'

export default {
  name: 'AdminSideBar',

  components: {
    statsIcon,
    moviesIcon,
    newsIcon,
    usersIcon
  }
}
</script>
