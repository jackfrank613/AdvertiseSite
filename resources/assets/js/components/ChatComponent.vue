<template>

    <div class="col-md-8">
      <div class="card">
         <div class="card-header">Chats</div>
         <div class="card-body">
             <chat-message-component></chat-message-component>
             <chat-form-component :touser="touser" ></chat-form-component>
         </div>
      </div>

    </div>
</template>
<script>


export default {
   
   props:['touser'],
   created(){
      //console.log(2);
   }
};
</script>
<style scoped>
.card-header{
  height:60px;
  background:white;
  box-shadow: 0.5px 0.5px 0.5px grey;
}
</style>