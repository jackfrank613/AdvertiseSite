<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in this.my_messages" v-bind:key="message['m_id']">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                       {{message['message']}}
                    </strong>
                </div>
                <p>
                   test
                </p>
            </div>
        </li>
    </ul>
</template>
<script>
  export default {
    props: [],
    data(){
        return {
            my_messages:[]
        }
    },
    methods:{
        read(){
             axios.get('http://localhost/jamii/public/frontoffice/messages').then(response => {
                this.my_messages = response.data;
                //console.log('messages',this.my_messages);
            })
            .catch(function(error){
              console.log(error);
            });
        }
    },
    created(){
        this.read(); 
        
 
    },
  };
</script>