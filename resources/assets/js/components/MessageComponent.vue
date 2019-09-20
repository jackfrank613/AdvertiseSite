<template>
 
    <div id="container" class="chat__message">
       <div v-for="message in this.messages" :key="message['m_id']">
       <p style="margin-bottom:25px;display:flex;justify-content:flex-start;max-width:60%"  v-if="isCheck(message['touser'])"><span class="left-body">{{message['message']}}</span></p>
       <p style="text-align:right;margin-bottom:25px;display:flex;justify-content:flex-start; max-width:60%" v-if="!isCheck(message['fromuser'])"><span class="right-body" >{{message['message']}}</span></p>
       </div>
    </div>
</template>
<script>

import Firebase from '../firebase.js'
export default {
 props:['touser','postid','userid'],
    data(){
      return{
          messages:[]
      }
    },
    created(){
    //    this.fetchData();
        // console.log(this.messages);
     //  this.eventClick();
          var ref = Firebase.database().ref(this.userid+"-"+this.touser+"-"+this.postid);
          ref.on('value', (snapshot) =>{
            snapshot.forEach(childSnapshot=> {
             console.log(childSnapshot.key, childSnapshot.val());
            //  this.messages = childSnapshot.val();
                this.messages.push(childSnapshot.val());
            });
        });
    },
    methods:{
         
         fetchData(){
              axios.get('http://localhost/jamii/public/frontoffice/message').then(response => {
                this.messages = response.data;
                console.log(response.data);
            });
          
         },
         eventClick(){

         Event.$on('sentmessage',(object)=>{
              this.messages.push(object);
          
           });
         Event.$on('sentclick',(object)=>{
                 this.messages=[];
                //console.log(object.to_user);
                axios.post('http://localhost/jamii/public/frontoffice/indmessage',{postid:object.post_id,touser:object.to_user}).then(response=>{   
                  //console.log(response.data);
                  this.messages=response.data;
                });

           });
         },

         isCheck(type){

             if(type === this.touser) return true;
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
       word-break:break-all;
        border-radius: 5px;
    }
     .right-body {
        margin-bottom: 10px;
        white-space: pre-wrap;
        background-color: #108ff7;
        color: white;
        padding: 10px;
        word-break:break-all;
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