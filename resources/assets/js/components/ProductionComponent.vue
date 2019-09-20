<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
               Advertise
            </div>
            <div class="card-body">
               
               <ul class="ul_class" v-for="admob in this.admobs" :key="admob['id']">
                 
                 <li class="li_class"  @click="sendClick(admob.id,admob.user_id)"> 
                    <div >
                        <img v-bind:src="admob['camera'][0]" alt="moving event" class="image_class">
                    </div>
                     <div class="list_class">
                         <div>{{admob['subject']}}</div>
                         <div>{{admob['adName']}}</div>
                          <div><span style="color: #f56b2a;">{{admob['price']}}€</span></div>
                     </div>
                     <div class="delete_class">
                     <div class="icon_size">
                         <i class="fa fa-trash-o" v-on:click="remove(admob)"></i>
                     </div>    
                     </div>
                 </li>
               </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['postid','touser'],
    data(){
         
         return{
             admobs:[],
             
            
         }

    },
    created(){
       this.initProduction();
       this.fechProduction();
    },
    methods:{
        initProduction(){
           axios.get('http://localhost/jamii/public/frontoffice/production').then(response=>{
            this.admobs=response.data;
          //  console.log(response.data);
           });
        },
        fechProduction(){
          axios.post('http://localhost/jamii/public/frontoffice/production',{post_id:this.postid}).then(response=>{
            this.admobs.push(response.data);
            
          });
        
        },
        sendClick(id,touser){
            Event.$emit('sentclick',{post_id:id,to_user:touser});
            //console.log(userid);
        },
        remove(admob){
            console.log(admob.user_id);
            axios.post('http://localhost/jamii/public/frontoffice/removelogo',{ad_id:admob.id,to_user:admob.user_id}).then(response=>{
                
              if(response.data.error){
               console.log(response.data.result);
                 
               }
               else{
                    this.admobs.splice(this.admobs.indexOf(admob), 1);
               }
            });
            
           
        }
        

    }
}
</script>
<style scoped>
.card-header{
    background: white;
    height: 60px;
    box-shadow: 0.5px 0.5px 0.5px grey;
}
.card-body{
    height: 500px;
    max-height: 500px;
    overflow-y: auto;
}
 .li_class{
     display:flex;
     background: ghostwhite;
 }
 .li_class :hover{
     color:red;
 }
 .image_class{
     width: 100px;
     height: auto;
 }
 .list_class{
     width:100%;
     margin-left: 30px;

 }
 .ul_class{
     padding:0
 }
 .delete_class{
    width:100%;
    padding:10px;
    text-align: end;
 }
 .icon_size{
     font-size: 21px
 }
</style>
