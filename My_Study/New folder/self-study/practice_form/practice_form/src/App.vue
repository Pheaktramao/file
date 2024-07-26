<template>
  <img alt="Vue logo" src="./assets/logo.png" >
  <FormValidation></FormValidation>
</template>

<script>
import FormValidation from './components/FormValidation.vue'

export default {
  name: 'App',
  components: {
    FormValidation
  }
}
</script>

<style>
img{
  margin-left: 40%;
}
</style>
