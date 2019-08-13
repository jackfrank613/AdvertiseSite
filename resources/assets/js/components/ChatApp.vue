<template>
    <div class="chat-app">
    <Conversation :contact="selectedContact" :messages="messages"/>
    </div>
</template>
<script>
    
    import Conversation from './Conversation';
    export default {
        
        data(){
             return{
                 selectedContact:null,
                 messages:[],
             };
        },
        mounted() {
        //   axios.get('/contacts').then((response)=>{
          
        //   });
        },
        
        components:{Conversation}
    }
</script>
