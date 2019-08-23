<template>

<v-card>

  <v-card-title class="font-weight-bold">検索</v-card-title>
  <v-card-text>検索フォームです</v-card-text>
  <v-card-title>aaa</v-card-title>
  <div class="px-2">
  <v-btn outlined rounded color="secondary">aaa</v-btn>
  <v-btn outlined rounded color="secondary">aaa</v-btn>
  <v-btn outlined rounded color="warning">aaa</v-btn>
  <v-btn outlined rounded color="warning">aaa</v-btn>
  </div>

  <v-card-title>bbb</v-card-title>
  <v-select class="px-2"
  slot
  type="date"
  ></v-select>

  <v-card-title>ccc</v-card-title>
  <v-btn outlined class="#ffc107">ccc</v-btn>
  <v-btn outlined class="#ffc107">ccc</v-btn>
  <v-btn outlined class="#ed992d">ccc</v-btn>
  <v-btn outlined color="#ed992d">ccc</v-btn>

  <v-card-title>ccc</v-card-title>
  <v-textarea
  class="mt-0"
  solo
  label="Solo textarea"
  auto-grow
  rows="1"
  value=""
  placeholder="aaa"
  ></v-textarea>

</v-card>

</template>

<script>
import axios from 'axios'
import hoge from '~/assets/no_image.png';

export default {
  layout: 'main',
  head: {
    title: '検索'
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