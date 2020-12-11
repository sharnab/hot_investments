<template>
    <div class="top-header">
        <header class="simple-header for-sticky ">
            <div class="menu">
                <div class="container">
                    <div class="logo">
                        <a href="index.html" title="">
                            <i class="" style="width: 18px; padding-top: 40%">
                                <img class="homepage-logo" src="/assets/global/img/logo.png" />
                                <strong style="width:200px;"><i class="sub-title">Investment Properties</i></strong>
                            </i>
                        </a>
                    </div>
                    <LogIn></LogIn>
                    <!-- <div class="popup-client">
                        <span><i class="fa fa-user" @click.prevent="show"></i> Signin / Signup</span>
                    </div> -->
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="#" title="">HOME</a>
                                <ul>
                                    <li><a href="index.html" title="">Home</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">PROPERTIES</a>
                                <ul>
                                    <li><a href="properties3.html" title="">Properties- Super </a></li>
                                    <li><a href="properties.html" title="">Properties- List</a></li>
                                    <li><a href="properties2.html" title="">Properties- Grid</a></li>
                                    <li><a href="property.html" title="">Property details</a></li>
                                </ul>
                            </li>
                            <li><a href="property.html" title="">PROPERTY</a></li>

                            <li><a href="contact.html" title="">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>
    </div>

</template>

<script>
import LogIn from './LogIn.vue';

export default {
    components: {
        LogIn
    },
    mounted() {

    },
    data() {
        return {
            // src: '../../assets/global/img/logo.jpg',
        }
    },
    // data() {
    //     return {
    //         loginModal: LoginComponent,
    //     }
    // methods: {
    //     show () {
    //         this.$modal.show('loginModal');
    //     },
    //     hide () {
    //         this.$modal.hide('loginModal');
    //     }
    // }
}
</script>
<style>
@media (max-width: 960px) {
    /* 480px */
    /* Page sidebar */
    .sub-title{
        padding-left: 5px;
        font-style: normal;
    }
    .homepage-logo{
        width: 150px;
        padding-top: 15px;
    }
    .menu-toggle{
        padding-top: 12px;
    }
    div.top-header{
        padding-top: 10px;
    }
}

@media (min-width: 965px) {
    .homepage-logo{
        width:200px;
        padding-top:10px;
    }
    .sub-title{
        padding-left:25px;
        font-style: normal;
    }
}
</style>
