<template>
    <div class="col-md-8">
      <div class="card">
         <div class="card-header">
            <div style="display:flex">
               <span style="font-size:20px">{{this.admob['subject']}}</span>
            </div>
         </div>
         <div class="card-body">
             <chat-message-component :touser="this.touser" :postid="this.postid" :userid="this.userid"></chat-message-component>
             <chat-form-component :touser="this.touser" :postid="this.postid" :userid="this.userid" ></chat-form-component>
         </div>
      </div>
    </div>
</template>
<script>
export default {
   
  props:['postid','touser','userid'],
  data(){
     return{
        admob:[]
     }
  },
   created(){
      this.fechProduction();
   },
    methods:{
        fechProduction(){
          axios.post('http://localhost/jamii/public/frontoffice/production',{post_id:this.postid}).then(response=>{
            this.admob=response.data;
          });
        }
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