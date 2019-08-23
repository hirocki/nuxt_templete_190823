<template>
<v-card>
<v-col cols="12" sm="12" md="12">
  プロフィール編集
  <v-text-field
  v-model="name"
  label="ニックネーム"
  placeholder="Placeholder"
  outlined
  ></v-text-field>
    <v-text-field
  v-model="email"
  label="メール"
  outlined
  ></v-text-field>
    <v-text-field
  label="一言コメント"
  outlined
  ></v-text-field>
    <v-text-field
  label="test"
  outlined
  ></v-text-field>
    <v-text-field
  label="test"
  outlined
  ></v-text-field>
    <v-text-field
  label="test"
  outlined
  ></v-text-field>
    <v-text-field
  label="test"
  outlined
  ></v-text-field>

<v-btn color="#ed9e00" v-on:click="Register">登録</v-btn>
<v-btn color="default" nuxt to="/mypage">戻る</v-btn>

</v-col>
</v-card>
</template>

<script>
import axios from 'axios'
import hoge from '~/assets/profile.jpg';

export default {
    /*
  fetch({store, redirect}){
    //if(!store.state.authUser){
    if(!axios.defaults.headers.common['Authorization']){
      return redirect('/login')
    }
  },
*/
  head: {
    title: 'プロフィール編集'
  },
  data () {
    return {
      name: "田中　太郎",
      email: "test@test.test",
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