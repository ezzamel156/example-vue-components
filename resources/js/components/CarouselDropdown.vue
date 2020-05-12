<template>
    <div  @mouseover="active = true" @mouseout="active = false">
        <a href="/carousel" class="navbar-item">
            Carousel
        </a>
        <portal to="nav-after">
            <div  @mouseover="active = true" @mouseout="active = false" v-show="active" style="position: absolute; width:100%; z-index:10; background:red; height: 200px">
                <div class="container" style="padding-top:8px; padding-bottom:8px">
                Hello
                </div>
            </div>      
        </portal>
    </div>
    
</template>

<script>
export default {
    data() {
        return {
            active: false,
        }
    }
}
</script>

<style>

</style>