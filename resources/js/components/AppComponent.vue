<template>
  <div>
    <div>
      <b-navbar toggleable="lg" type="dark" variant="info">
        <b-navbar-brand :to="{ name: 'home' }">
          <img
            style="border-radius: 20px"
            src="https://placekitten.com/g/30/30"
            alt="Kitten"
          />
          MyAppJob
        </b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item :to="{ name: 'home' }">HOME</b-nav-item>
            <b-nav-item :to="{ name: 'blog' }">BLOG</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-form>
              <b-form-input
                size="sm"
                class="mr-sm-2"
                placeholder="Search"
              ></b-form-input>
              <b-button size="sm" class="my-2 my-sm-0" type="submit"
                >Search</b-button
              >
            </b-nav-form>

            <!--<b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">ES</b-dropdown-item>
          <b-dropdown-item href="#">RU</b-dropdown-item>
          <b-dropdown-item href="#">FA</b-dropdown-item>
        </b-nav-item-dropdown> -->

            <b-nav-item :to="{ name: 'login' }">LOGIN</b-nav-item>
            <b-nav-item :to="{ name: 'registro' }">REGISTRO</b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>

    <transition name="slide-fade" mode="out-in">
      <router-view :key="$route.fullPath"></router-view>
      <!-- :key="$route.fullPath" para poder refrescar la web segun el post que seleccionemos -->
    </transition>
  </div>
</template>