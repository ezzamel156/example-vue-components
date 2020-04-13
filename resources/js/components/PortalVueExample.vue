<template>
    <div class="walao">
        <div>
            Hello buddy
        </div>
        <div>
            Yo momma
        </div>
        <portal to="jem">
            <div>
                Yo dadda
            </div>
        </portal>
        <div>
            I am here
        </div>
        <portal-target name="jem" slim>
        </portal-target>    
    </div>
</template>

<script>
export default {

}
</script>

<style>
.walao {
    display:flex; 
    justify-content:space-between; 
    width:80%; 
    margin:0 auto 0 auto;
}
</style>