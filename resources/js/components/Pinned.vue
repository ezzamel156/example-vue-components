<template>
    <div>
        <slot>
        </slot>
    </div>
</template>

<script>
export default {
    mounted() {
        let el = this.$el;

        window.addEventListener('scroll', _.throttle(function() {
            console.log(el.offsetTop);
            if(window.scrollY >= el.offsetTop) {
                //pin to top
            }
            else {
                //unpin
            }

        }, 1000));
    }
}
</script>

<style>

</style>