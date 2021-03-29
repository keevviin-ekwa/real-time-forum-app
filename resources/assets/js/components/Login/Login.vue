<template>
    <div id="app">
        <v-app :class="{ 'pa-3': $vuetify.breakpoint.smAndUp }" dark id="inspire">
            <v-container>
                <v-layout wrap>
                    <v-flex sm12 md6 offset-md3>
                        <v-card elevation="4" light tag="section">
                            <v-card-title>
                                <v-layout align-center justify-space-between>
                                    <h3 class="headline">
                                        Forum
                                    </h3>

                                </v-layout>
                            </v-card-title>
                            <v-divider></v-divider>
                            <v-card-text>
                                <p>Sign in with your email and password:</p>
                                <v-form id="form" @submit.prevent="login">
                                    <v-text-field
                                        outline
                                        label="email"
                                        type="email"
                                        v-model="form.email"></v-text-field>
                                    <v-text-field
                                        outline
                                        hide-details
                                        label="Password"
                                        type="password"
                                        v-model="form.password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-divider></v-divider>
                            <v-card-actions :class="{ 'pa-3': $vuetify.breakpoint.smAndUp }">
                                <v-btn color="info" flat>
                                    Forgot password?
                                </v-btn>
                                <v-spacer></v-spacer>
                                <v-btn color="info" type="submit" form="form" :large="$vuetify.breakpoint.smAndUp" >
                                    <v-icon left>lock</v-icon>
                                    Login
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>

                </v-layout>
            </v-container>
        </v-app>
    </div>
</template>

<script>
export default {
name: "Login",
    data(){
    return {
        form:{
            email:null,
            password:null
        }
    }
    },
    methods:{
    login(){
         axios
             .post('api/auth/login',this.form)
             .then(res=> console.log(res.data))
             .catch(error => console.log(error.response.data))


    }
    }
}
</script>

<style scoped>

</style>
