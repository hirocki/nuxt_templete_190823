<template>
  <v-app light>
    <v-navigation-drawer
    color="#ed9e00"
      v-model="drawer"
      :mini-variant="miniVariant"
      :clipped="clipped"
      fixed
      app
    >
      <v-list>
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :to="item.to"
          router
          exact
        >
          <v-list-item-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" />
          </v-list-item-content>
        </v-list-item>

<!--    ログインチェック
        <v-list-item
        v-if="!is"
        :to="logout_item.to"
        router
        extract>
        <v-list-item-action>
          <v-icon>{{ logout_item.icon }}</v-icon>
        </v-list-item-action>
        <v-list-item-content>
            <v-list-item-title v-text="logout_item.title" />
        </v-list-item-content>
        </v-list-item>
-->

      </v-list>
    </v-navigation-drawer>

    <v-app-bar
    　color="#e8b143"
      :clipped-left="clipped"
      fixed
      app
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
    </v-app-bar>

    <v-content>
      <v-container class="px-0">
        <nuxt />
      </v-container>
    </v-content>

<!--
      <v-footer
      :fixed="fixed"
      app
    >
      <span>&copy; 2019</span>
    </v-footer>
-->
  </v-app>
</template>

<script>
import axios from 'axios'
export default {
  methods: {
  },
  computed: {
  },
  data () {
    return {
      clipped: false,
      drawer: false,
      fixed: false,
      items: [
        {
          icon: 'mdi-home',
          title: 'TOP',
          to: '/'
        },
        {
          icon: 'mdi-account-search',
          title: 'Search',
          to: '/search'
        },
        {
          icon: 'mdi-account',
          title: 'Mypage',
          to: '/mypage'
        },
        {
          icon: 'mdi-key',
          title: 'login',
          to: '/login'
        },
        {
          icon: 'mdi-logout',
          title: 'logout',
          to: '/logout'
        },
      ],
      miniVariant: false,
      right: true,
      rightDrawer: false,
      title: 'Vuetify.js'
    }
  }
}
</script>