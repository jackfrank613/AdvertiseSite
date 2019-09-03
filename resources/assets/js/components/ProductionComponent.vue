<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Production</div>
            <div class="card-body">
                Production
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created(){
       // console.log('test');
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
</style>
