<template>
  <div>
    <img :src="img">
    <p>{{name}}</p>
    <p>{{comment}}</p>
    時間<p>{{start}}-{{end}}</p>

    <v-card-actions>
      <v-spacer />
        <v-btn color="default" nuxt to="/">
          戻る
        </v-btn>
    </v-card-actions>
  </div>
</template>

<script>
import axios from 'axios'
import hoge from '~/assets/no_image.png';

export default {
  head: {
    title: 'Profile page'
  },
  data(){
    return{
      url:'https://ja.nuxtjs.org/',
      name:'name',
      comment:'comment',
      start:'18:00',
      end:'24:00',
      img: hoge,
    }
  },
  computed:{
    today(){
      return moment().format('YYYY/MM/DD dddd');
    }
  }
}
</script>