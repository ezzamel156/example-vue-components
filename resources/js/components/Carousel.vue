<template>
    <div>
        <slot></slot>    
    </div> 
</template>

<script>
    import 'flickity/dist/flickity.min.css'
    import Flickity from 'flickity'
    export default {
        props : {
            wrapAround: { default: true },
            autoPlay: { default:false }
        },
        mounted() {
            new Flickity(this.$el, {
                wrapAround: this.wrapAround,
                contain: true,
                cellAlign: "left",
                autoPlay: this.autoPlay
            })
        }
    }
</script>
