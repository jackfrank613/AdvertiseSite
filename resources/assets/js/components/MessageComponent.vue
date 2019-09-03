<template>
    <div id="container" class="chat__message">
       <div v-for="message in this.messages" :key="message['m_id']">
       <p style="margin-bottom:25px"  v-if="isCheck(message['type'])"><span class="left-body">{{message['message']}}</span></p>
       <p style="text-align:right;margin-bottom:25px" v-if="!isCheck(message['type'])"><span class="right-body" >{{message['message']}}</span></p>
       </div>
    </div>
</template>
<script>


export default {

    data(){
      return{
          messages:[]
      }
    },
    created(){
       this.fetchData();
    },
    methods:{
         
         fetchData(){
              axios.get('http://localhost/jamii/public/message').then(response => {
                this.messages = response.data;
                console.log(response.data);
            });
           Event.$on('sentmessage',(object)=>{
              this.messages.push(object);
              console.log(this.messages);
           });
      

         },
         isCheck(type){

             if(type === "me") return true;
             else return false;
         }
    }

}
</script>

<style>
    .user {
        font-weight: 800;
    }
    .left-body {
        margin-bottom: 10px;
        white-space: pre-wrap;
        background-color: #108ff7;
        color: white;
        padding: 10px;

        border-radius: 5px;
    }
     .right-body {
        margin-bottom: 10px;
        white-space: pre-wrap;
        background-color: #108ff7;
        color: white;
        padding: 10px;
        border-radius: 5px;
    
    }
    .message {
        border-bottom: 1px solid #000000
    }
    .self {
        background-color: #f0f0f0;
        padding: 10px;
    }
</style>