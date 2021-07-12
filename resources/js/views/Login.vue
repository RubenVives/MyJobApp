<template>
  <div>
    <section class="section">
      <div class="container card my-3">
        <div class="row">
          <div class="container card-body container--mini my-3 w-50">
            <img
              class="img-fluid mx-auto d-block mb-5"
              src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/elements/bootstrap-logo.svg"
              alt=""
            />
            <form
              name="loginform"
              id="loginform"
              action="https://themes.getbootstrap.com/wp-login.php"
              method="post"
            >
              <div class="form-group">
                <label for="user_login">Correo Electrónico</label>
                <input
                  type="text"
                  name="log"
                  id="user_login"
                  class="form-control"
                  value=""
                  size="20"
                />
              </div>
              <div class="form-group">
                <label for="user_pass">Contraseña</label>
                <a
                  class="form-sublink float-right"
                  href="https://themes.getbootstrap.com/my-account/lost-password/"
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
                  type="submit"
                  name="wp-submit"
                  id="wp-submit"
                  class="btn btn-brand btn-block mb-4"
                  value="Entrar"
                />
                <input
                  type="hidden"
                  name="redirect_to"
                  value="https://themes.getbootstrap.com/my-account/"
                />
              </div>
            </form>
            <p class="small text-center text-gray-soft">
              ¿ No tienes cuenta ?
              <a href="https://themes.getbootstrap.com/my-account/"
                >Registrate</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style>
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