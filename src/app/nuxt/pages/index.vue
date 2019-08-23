<template>
  <v-layout column justify-center align-center>
    <v-flex xs12 sm8 md6>
      <div class="text-center">
        <logo />
        <vuetify-logo />
      </div>
      <v-card>
        <v-card-title class="headline">
          Nuxt.js*Vuetify*Laravel
        </v-card-title>

        <v-card-text>
        {{ apiPost }}
        </v-card-text>

        <NLink to="/profile">
          <img :src="img">
        </NLink>
        <NLink to="/profile">
          <img :src="img">
        </NLink>
        <NLink to="/profile">
          <img :src="img">
        </NLink>
        <NLink to="/profile">
          <img :src="img">
        </NLink>
      </v-card>

    </v-flex>
  </v-layout>
</template>

<script>
import Logo from '~/components/Logo.vue'
import VuetifyLogo from '~/components/VuetifyLogo.vue'
import hoge from '~/assets/no_image.png';

export default {
  layout: 'main',
  components: {
    Logo,
    VuetifyLogo
  },
  data () {
    return {
      img: hoge
    }
  },
  async asyncData({ app }){
    let data = await app.$axios.$get('http://localhost:8080/api/data')
    return { apiPost: data }
  },
}
</script>
