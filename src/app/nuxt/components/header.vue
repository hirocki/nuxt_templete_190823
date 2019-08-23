<template>
  <div>
    <v-navigation-drawer
    color="#eee"
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
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
    　color="#eee"
      :clipped-left="clipped"
      fixed
      app
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
            clipped: false,
      fixed: false,
      drawer: null,
      showSearchInput: false,
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
          icon: 'mdi-account-search',
          title: 'mypage',
          to: '/mypage'
        },
      ],
      miniVariant: false,
      right: true,
      rightDrawer: false,
      title: 'Vuetify.js'
    }
  }
};
</script>