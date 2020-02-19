<template>
    <div class="card">
        <div class="card-header">Example Vue.js Component</div>

        <div class="card-body" id="example">
            I'm an example component and my message is: {{ message }}
            <div class="form-group">

                <input type="text" class="form-control" name="message" id="message" aria-describedby="helpId"
                    v-model="message">
                <small id="helpId" class="form-text text-muted">Notice the v-bind magic ^^</small>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                message: 'Hello World!'
            }
        },
        mounted() {
            console.log('ExampleComponent mounted.')
            console.log(this.message)
        }
    }

</script>
