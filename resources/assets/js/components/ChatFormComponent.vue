<template>
    <div>
       
        <form class="form">
            <textarea id="body" cols="25" rows="5" class="form-input" v-model="newMessage">
             </textarea>
            <div style="text-align:right">
                <button class="notice" @click="sendMessage">Send</button>
            </div>
        </form>
    </div>
</template>
<script>

//  import Firebase from 'firebase'
// var database = Firebase.initializeApp({
//       apiKey: 'apAIzaSyB9OiZxj6qg6GMxAOUgvsj08jy1jO4dZtQiKey',
//       authDomain: 'jamiifrance.firebaseapp.com',
//       databaseURL:'https://jamiifrance.firebaseio.com',
//       projectId: '1:173946993173:web:420701531132bb72',
//       storageBucket:'jamiifrance.appspot.com',
//       secret: '6P5MgvtPB3gG68lB3pYEDZd6Nh1MZNP2C2FmbCX8'
//   }).database();
//   var ref = database.ref("blog/posts");

//   ref.on('value', function(snapshot){
//     var changedUser = snapshot.val();
//     console.log(changedUser);
//   });

export default {
     props:['touser'],
     created(){
       console.log(this.touser);
     },
    data(){
       return{
           newMessage:""
       }
    },
    methods:{
        sendMessage(){
                        // Get a key for a new Post.
            // var newPostKey = database.ref("blog/posts").push().key;
            // console.log(newPostKey);
            // var postData = {message: "trsdfksd", date: "2016-9-3"};
            // // Write the new post's data simultaneously in the posts list and the user's post list.

            // database.ref('/blog/posts/' + newPostKey).update(postData);
            //console.log(this.newMessage);
            Event.$emit('sentmessage',{message:this.newMessage,type:"me"});
            axios.post('http://localhost/jamii/public/message', {message:this.newMessage,to:this.touser}).then(response => {
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