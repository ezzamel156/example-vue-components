<template>
    <div>
        <article class="message is-dark">
            <div class="message-body">
                Check console log buddy
            </div>
        </article>
        <button @click="alertDebounce($event.target.innerHTML)">Debounce</button>
        <button @click="alertThrottle($event.target.innerHTML)">Throttle</button>

    </div>
</template>

<script>
import _ from 'lodash';
export default {
    methods: {
        alertDebounce: _.debounce(function(msg) {
            console.log(msg);
        }, 2000),
        alertThrottle: _.throttle(function(msg) {
            console.log(msg);
        }, 2000)
    }
}
</script>