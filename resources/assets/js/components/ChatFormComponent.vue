<template>
    <div>
       
        <div class="form">
            <textarea id="body" cols="25" rows="5" class="form-input" v-model="newMessage">
             </textarea>
            <div style="text-align:right">
                <button class="notice" @click="sendMessage">Send</button>
            </div>
        </div>
    </div>
</template>
<script>

import Firebase from '../firebase.js'


export default {
     props:['touser','postid','userid'],

     data(){
         return{
            //messageid:this.userid+"-"+this.touser+"-"+this.postid
         }
     },
     created(){
        
        console.log(Firebase.database());
        // var ref = database.ref(this.userid);

        // ref.on('value', function(snapshot){
        //     var changedUser = snapshot.val();
        //     console.log(changedUser);
        // });
       //console.log(this.postid);
     },
    data(){
       return{
           newMessage:""
       }
    },
    methods:{
        sendMessage(){
                        // Get a key for a new Post.
            // Write the new post's data simultaneously in the posts list and the user's post list.
            console.log(this.newMessage);
            var newPostKey = Firebase.database().ref(this.userid+"-"+this.touser+"-"+this.postid).push().key;
            console.log(newPostKey);
            var postData = {fromuser:this.userid, touser: this.touser,message:this.newMessage};
            Firebase.database().ref("/"+this.userid+"-"+this.touser+"-"+this.postid+"/"+ newPostKey).update(postData);
            Event.$emit('sentmessage',{message:this.newMessage,type:"me"});
            axios.post('http://localhost/jamii/public/frontoffice/message', {message:this.newMessage,to:this.touser}).then(response => {
              console.log(response.data);
            });
            this.newMessage="";
        },
        object(){

           
        }
    }
}
</script>

<style scoped>
 .form{
     padding: 8px;

 }
 .form-input{
     width:100%;
     border:1px solid #d3e0e9;
     padding:5px 10px;
     outline:none;
 }
 .notice{
     background-color:#108ff7;
     color:white;
     width: 100px;
     height: 40px;
     border:aliceblue;
     border-radius: 5px;
     
 }
 .float{
	position: fixed;;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}
</style>