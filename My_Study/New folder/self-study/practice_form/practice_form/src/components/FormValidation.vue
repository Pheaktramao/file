<template>
    <div class="container w-50">
        <form action="">
            <label for="name" class="w-100 mb-3">
                <input type="text" for="name" id="name" placeholder="Enter your name" class="w-100" v-model="name">
                <p class="name text-danger">{{nameMessage}}</p>
            </label><br>
            <label for="age" class="w-100 mb-3">
                <input type="number" for="age" id="age" placeholder="Enter your age" class="w-100" v-model="age">
                <p class="age text-danger">{{ageMessage}}</p>
            </label><br>
            <label for="password" class="w-100 mb-3">
                <input type="password" for="password" id="password" placeholder="Enter your password" class="w-100" v-model="password">
                <p class="password text-danger">{{passwordMessage}}</p>
            </label>
            <button class="btn btn-info w-100">Submit</button>
        </form>
    </div>
    
</template>

<script>
export default {
    name: "FormValidation",
    data(){
        return {
        name: '',
        age: null,
        password: ''
     }
    },
    watch: {
        name(newName) {
            if (newName.length < 4) {
                this.nameMessage = 'Please input more than 3 characters';
            } else if (newName.length > 20) {
                this.nameMessage = 'Please input less than 20 characters';
            } else {
                this.nameMessage = '';
            }
        },
        age(newAge) {
            if (newAge <= 0) {
                this.ageMessage = 'The age must be more than 0!';
            } else if (newAge > 200) {
                this.ageMessage = 'The age must be less than 200!';
            } else {
                this.ageMessage = '';
            }
        },
        password(newPassword) {
            if (newPassword.length < 8) {
                this.passwordMessage = 'The password must be more than 8 charectors!';
            } else if (newPassword.length > 100) {
                this.passwordMessage = 'The password must be less than 100 charectors!';
            } else {
                this.passwordMessage = '';
            }
        }
    }
}
</script>

<style>

</style>