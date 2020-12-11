<template>
    <div class="container">
        <Menubar></Menubar>
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>
import Menubar from './components/menubar';
// import Login from './components/LogIn';

    export default{
        name: 'App',
        components: {
            Menubar,
            // Login
        }
    }
</script>
