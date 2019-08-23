<template>
  <v-app light>
    <my-header />
    <v-content>
      <v-container class="px-0">
        <nuxt />
      </v-container>
    </v-content>
    <my-footer />
  </v-app>
</template>

<script>
import MyHeader from '~/components/header.vue'
import MyFooter from '~/components/footer.vue'
export default {
  name: 'navbar',
  components: {
    MyHeader,
    MyFooter
  }
}
</script>