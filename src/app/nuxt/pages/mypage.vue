<template>
<v-card>

<v-img
height="200px"
:src="img"
></v-img>

  <v-list two-line subheader class="pa-0">
    <v-list-item
      v-for="item in item"
      :key="item.title"
      :to="item.to"
      @click=""
    >
      <v-list-item-avatar>
        <v-icon
          :class="[item.iconClass]"
          v-text="item.icon"
        ></v-icon>
      </v-list-item-avatar>

      <v-list-item-content>
        <v-list-item-title v-text="item.title"></v-list-item-title>
      </v-list-item-content>

    </v-list-item>
  </v-list>
</v-card>
</template>

<script>
import axios from 'axios'
import hoge from '~/assets/profile.jpg';

export default {
  layout: 'main',
  head: {
    title: 'MyPage'
  },
  data: ()=>({
    item:[
      {icon:'mdi-account-circle', iconClass: 'gray--text', title: 'プロフィール編集', to: '/mypage_edit'},
      {icon:'mdi-coin', iconClass: 'gray--text', title: 'お支払い情報編集', to: '/credit_edit'},
      {icon:'mdi-coins', iconClass: 'gray--text', title: 'ポイント', to: '/point'},
      {icon:'mdi-comment-question-outline', iconClass: 'gray--text', title: 'ヘルプ', to: '/help'},
    ],
    img: hoge
  }),
  computed:{
    today(){
      return moment().format('YYYY/MM/DD dddd');
    }
  }
}
</script>