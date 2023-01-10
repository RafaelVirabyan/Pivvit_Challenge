<template>
  <div>
    <b-form @submit="onSubmit" >
      <b-form-group id="input-group-2" label="Email:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.email"
          placeholder="Enter Your Email"
          required
          type="email"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Password:" label-for="input-3">
        <b-form-input
          id="input-3"
          v-model="form.password"
          placeholder="Enter Your Password"
          type='password'
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">Log In </b-button>
    </b-form>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: {
            email: '',
            password: '' 
        }
      }
    },
    mounted() {
    },
    methods: {
      onSubmit(event) {
        event.preventDefault()
        this.axios.post('login', this.form).then((res) => {
            if(res.data.login) {
                let authdata = window.btoa(res.data.user.email + ':' + res.data.user.password);
                localStorage.setItem('userToken', authdata);
                this.$router.push('/donations');
            }
        })
      }
    }
  }
</script>