<template>
<v-card>
<v-col cols="12" sm="12" md="12">
  決済情報編集
  <v-card class="pa-4">
    現在の決済情報<br>
    クレジットカード番号 ****-****-0000<br>
    有効期限 2020/01
  </v-card>

  <div class="pa-4">
  <v-text-field
  label="クレジットカード番号"
  outlined
  ></v-text-field>
    <v-text-field
  label="セキュリティコード"
  outlined
  ></v-text-field>
<v-col class="d-flex" cols="12" sm="6">
  <v-select
    :items="year_items"
    label="年"
    outlines
  ></v-select>
</v-col>
<v-col class="d-flex" cols="12" sm="6">
  <v-select
    :items="month_items"
    label="月"
    outlines
  ></v-select>
</v-col>

<v-btn color="#ed9e00" v-on:click="Register">登録</v-btn>
<v-btn color="default" nuxt to="/mypage">戻る</v-btn>

</div>

</v-col>
</v-card>
</template>

<script>
import axios from 'axios'
import hoge from '~/assets/profile.jpg';

export default {
  fetch({store, redirect}){
    //if(!store.state.authUser){
    if(!axios.defaults.headers.common['Authorization']){
      return redirect('/login')
    }
  },
  head: {
    title: 'プロフィール編集'
  },
  data () {
    return {
      card_id: "****-****-0000",
      code: "000",
      year_items: [
        '2019','2020','2021','2022','2023','2024','2025',
      ],
      month_items: [
        '1','2','3','4','5','6','7','8','9','10','11','12',
      ],
    }
  },
  methods: {
    Register() {
      const postData = {
        name: this.name,
        age: this.age,
      }
      console.log(postData)
      axios.post('http://localhost:8080/oauth/token', postData)
        .then(response => {
      console.log(response)
        })
        .catch(error => {
          console.log(error)
        })
    },
  }
}
</script>