<template>
  <div>
    <section class="section">
      <div class="container card my-3">
        <div class="row">
          <div class="container card-body container--mini my-3 w-50">
            <img
              class="img-fluid mx-auto d-block mb-5 w-25"
              src="https://image.spreadshirtmedia.net/image-server/v1/mp/designs/178997237,width=178,height=178/musarana-elefante.png"
              alt=""
            />
            <form name="loginform" id="loginform" @submit.prevent>
              <div class="form-group">
                <label for="user_login">
                  <i class="fa fa-envelope mr-1"></i>Correo Electrónico
                </label>
                <input
                  type="text"
                  name="email"
                  id="user_login"
                  class="form-control"
                  value=""
                  size="20"
                />
              </div>
              <div class="form-group">
                <label for="user_pass">Contraseña</label>
                <a class="form-sublink float-right" href="#"
                  >¿ Olvidaste la contraseña ?</a
                >
                <input
                  type="password"
                  name="pwd"
                  id="user_pass"
                  class="form-control"
                  value=""
                  size="20"
                  placeholder="*********"
                />
              </div>

              <p class="login-remember">
                <label
                  ><input
                    name="rememberme"
                    type="checkbox"
                    id="rememberme"
                    value="forever"
                  />
                  Remember Me</label
                >
              </p>
              <div class="form-group">
                <input
                  @click="logearUsuario"
                  type="submit"
                  name="wp-submit"
                  id="wp-submit"
                  class="btn btn-brand btn-block mb-4"
                  value="Entrar"
                />
              </div>
            </form>
            <p class="small text-center text-gray-soft">
              ¿ No tienes cuenta ?
              <a href="#">Registrate</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  data() {
    return {
      URL_APP: "",
    };
  },
  methods: {
    logearUsuario() {
      let URL_APP = this.$URL_APP;
      let url = URL_APP + "api/loginUser";
      alert(url);
      axios.post(url).then((response) => {
        console.info(response.data);
      });
    },
  },
};
</script>




<style>
section.section div.container.card {
  width: 50%;
}

.btn.btn-brand.btn-block {
  background: #7952b3;
  color: #ffffff;
}

@media screen and (max-width: 991px) {
  div#app .section .container {
    width: 100% !important ;
  }
}
</style>