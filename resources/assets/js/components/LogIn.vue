<template>
<div>
    <div class="popup-client" @click.prevent="show">
        <span><i class="fa fa-user"></i> Signin / Signup</span>
    </div>
    <modal name="loginModal" :width='500' :height='600' :adaptive="true" class="modal_view">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label style="margin-bottom: 45px;" for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label style="margin-bottom: 45px;" for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="group" style="font-size: 20px; text-align: center">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-apple"></a>
                            <a href="#" class="fa fa-google"></a>
                        </div>
                            <!-- <span class="spn-save"> <i class="ti ti-facebook"></i> </span>
                            <span class="spn-save"> <i class="ti ti-apple"></i> </span>
                            <span class="spn-save"> <i class="ti ti-google"></i> </span> -->
                        <div class="hr" style="margin-top: 45px"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input id="pass" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Repeat Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="group" style="font-size: 20px; text-align: center">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-apple"></a>
                            <a href="#" class="fa fa-google"></a>
                        </div>
                        <div class="hr" style="margin-top: 15px;margin-bottom: 15px"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member? <b>Sign In</b></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </modal>
</div>
</template>


<script>
export default {
    //     name: 'LoginComponent',
    //     mounted() {
    //         this.show()
    //     },
    data() {
        return {
            loginModal: false,
            // src: '../../assets/global/img/logo.jpg',
            src: './assets/global/img/logo.png',
        }
    },
    methods: {
        show() {
            this.$modal.show('loginModal');
        },
        hide() {
            this.$modal.hide('loginModal');
        }
    }
}
</script>

<style>
.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:680px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:50px 50px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:30px 0 30px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

.fa-facebook:hover{
    color: #3B5998;
    background: white;
}

.fa-apple:hover{
    color: black;
    background: white;
}

.fa-google:hover{
    color: #dd4b39;
    background: white;
}

.fa-facebook:hover, .fa-apple:hover, .fa-google:hover {
    -moz-transition: background-color 1s ease-out;
    -o-transition: background-color 1s ease-out;
    transition: background-color 1s ease-out;
}

.fa-facebook, .fa-apple, .fa-google  {
    padding: 20px;
    font-size: 50px;
    width: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
    background: #3B5998;
    color: white;
}

.fa-apple{
    background: black;
}

.fa-google{
    background: #dd4b39;
}

</style>
