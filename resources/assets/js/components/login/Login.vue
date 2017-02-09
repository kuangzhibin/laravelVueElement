<template>
  <div>
    <div class="login">
      <h2 class="LoginForm-title">登录</h2>
      <el-form ref="form" :model="form" label-width="80px">
        <el-form-item label="分机号" id="ExtensionNumber">
          <el-input v-model="form.ExtensionNumber"></el-input>
        </el-form-item>

        <el-form-item label="用户">
          <el-input v-model="form.UserName"></el-input>
        </el-form-item>

        <el-form-item label="密码">
          <el-input v-model="form.Password"></el-input>
        </el-form-item>
        <div class="login_btn" @click="onSubmit">登录</div>
      </el-form>
    </div>

  </div>
</template>

<script>
  export default {
    name:'Login',
    data(){
      return{
        form:{
          ExtensionNumber:'',
          UserName:'',
          Password:'',
        }
      }
    },
    methods: {
      onSubmit() {
        console.log('submit!');
      }
    }

}

</script>
<style>
.login{
    width: 400px;
    height:382px;
    padding: 0 30px;
    border: 1px solid #ebebeb;
    position: absolute;
    left: 50%;
    margin-left: -200px;
    top:20%;
}
.login .title{
    text-align: center;
    font:22px/76px;
    font-weight: 700;
    color: #000;
}

.login_btn{
    width: 340px;
    height: 42px;
    border: 1px solid #ebebeb;
    background: #43b373;
    color: #fff;
    font: 20px/28px "微软雅黑";
    text-align: center;
    line-height:42px;
    cursor: pointer;
}


#ExtensionNumber{
    margin-top:30px;
}


.el-form-item__label {
    color: #43b373;

}

.LoginForm-title{
    text-align:center;
    margin-top:30px;
}

</style>
