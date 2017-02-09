<template>
  <div>
    {{message}}
    <el-button @click="headleClick">获取数据</el-button>
    <ul class="cnodejs">
      <li v-for="item in datas">
        {{ item.title }}
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        datas: []
      }
    },
    props: ['message'],
    mounted() {
      console.log('Component mounted.')
    },
    methods: {
      headleClick() {
        var _this = this;
        axios.get('https://cnodejs.org/api/v1/topics')
          .then(function(res){
             _this.datas = res.data.data
          })
          .catch(function(err){
              console.log(err);
          })
      }
    }
  }
</script>

<style scoped>
  .cnodejs {
    margin: 10px 0;
  }
  .cnodejs li{
    list-style: none;
    padding: 8px 12px;
  }
</style>
