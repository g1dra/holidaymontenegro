<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapMutations } from 'vuex'
    export default {
        props:{
            events :{
                type: Array,
                required: true
            }
        },
        data(){
            return {}
        },
        methods: {
            ...mapMutations(['addEvents'])
        },
        mounted() {
            this.addEvents(this.events);
        }
    }
</script>
