<template>
    <div id="scroll" class="message-area" ref="message_div">
      <message-component :touser="this.touser" :postid="this.postid" :userid="this.userid">
      </message-component>
    </div>
</template>

<script>
export default {
      props:['touser','postid','userid'],
  created(){

      this.scrollEnd();
      
  },
  mounted(){
     Event.$on('sentmessage',(object)=>{
              this.scrollEnd();
           });
  },
  methods:{
    scrollEnd(){
      this.$nextTick(
            () => {
                this.$refs.message_div.scrollTop=9999;
            }
        )
    }
  }

}
</script>
<style scoped>
.message-area{
    height:500px;
    max-height:500px;
    overflow-y: scroll;
    padding: 15px;
    border-bottom: 1px solid #eee;
}
</style>