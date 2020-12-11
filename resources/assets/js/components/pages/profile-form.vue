<template>
<div>
    <section class="block">
        <div class="container agnet-prop">
            <div class="row">
                <aside class="col-md-2 column">
                    <div class="agent_bg_widget widget">
                        <div class="agent_widget">
                            <!-- <div class="agent_pic">
                                    <a href="agent.html" title="">
                                        <img src="img/demo/man1.jpg" alt="" />
                                        <h5>Smith forbes</h5>
                                    </a>
                                </div> -->
                            <!-- <ul class="agent-menu">
                                    <li>
                                        <a href="" ><i class="fa fa-user"> </i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="" ><i class="fa fa-home"> </i> My Properties </a>
                                    </li>
                                    <li>
                                        <a href="" ><i class="fa fa-sign-out"> </i> Log-out </a>
                                    </li>
                                </ul> -->

                        </div>
                    </div>
                </aside>

                <div class="col-md-8 column">
                    <div class="heading4">
                        <h2>EDIT PROFILE</h2>
                    </div>

                    <div class="submit-content">
                        <form id="profile_form" name="profile_form" class="form profile-form">
                            <div class="control-group">
                                <div class="group-title">Welcome back, Kimaro Kyoto</div>
                                <div class="group-container row">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group s-profile-title">
                                                    <label for="title">Name&nbsp;*</label>
                                                    <input id="title" class="form-control" value="Kimaro Kyoto" name="title" required="" type="text">
                                                </div>
                                                <div class="form-group s-profile-email">
                                                    <label for="email">Email&nbsp;*</label>
                                                    <input id="email" class="form-control" value="kiamro@kiamromail.com" name="email" required="" type="text">
                                                </div>

                                            </div>

                                            <div class="col-md-6">


                                                <div class="form-group s-profile-phone">
                                                    <label for="phone">Phone</label>
                                                    <input id="phone" class="form-control" value="(456) 09090909" name="phone" type="text">
                                                </div>
                                                <div class="form-group s-profile-mobile">
                                                    <label for="mobile">Mobile</label>
                                                    <input id="mobile" class="form-control" value="(456) 09090909" name="mobile" type="text">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="desc">About me</label>
                                        <textarea id="desc" class="form-control" name="desc" rows="8">Kimaro kyoto He did this without coming from another Manhattan firm. The instinct that drove him to form Elegran was a strong vision and passion to create a workplace atmosphere of generosity and teamwork. Similarly, he committed himself to a basis where the people would be more important than the company's bottom line. His penchant for providing exceptional service to his clients coupled with a cutting-edge knowledge of the industry has provided Elegran's agents with a strong foundation to succeed in their own goals of making clients' real estate dreams into reality. Moreover, Doe realized that there was a real demand for a non-pressured, honest atmosphere where agents could thrive without the everyday workplace politics. Doe also envisioned a workplace in which people would feel at home, clients' interests would be put first and innovative strategies using technology would be utilized in servicing clients' and agents' needs. We believe that this ongoing mission combined with a commitment to industry ethics, selflessness and our select team of knowledgeable agents can change the real estate industry for the better. Prior to Elegran, Doe gained his industry experience in wholesale mortgage banking. He quickly rose to the top of his field at the age of 27, producing in the top 1% industrywide. Close to his exit from that field, Doe was known for implementing new underwriting methods, which brought his team to be the most profitable in the Northeast. Today, Doe and the Elegran team have made their mark; they have earned a respectable presence in the most competitive Real Estate market in the world. His team has experienced exponential growth from the formative days, and they continue to succeed. Agents who work at Elegran continually boast about the office and our "family" atmosphere. Residing for over a decade in the NYC area and a native of Williamsville, New York, Doe went to college in upstate New York, the University of Hawaii and The London School of Economics, majoring in both Business and Economics. Doe spends most of his free time with his family and enjoys reading, travel, music and sporting events.
                                        </textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="group-title">Profile Picture</div>
                                        <div class="group-container row">
                                            <div class="col-md-12" style="height: 50%">
                                                <vue-dropzone
                                                ref="myVueDropzone"
                                                id="dropzone"
                                                :options="dropzoneOptions"
                                                v-on:vdropzone-sending="sendingEvent">
                                                <div class="dropzone-custom-content">
                                                    <h3 class="dropzone-custom-title">Drag and drop to upload content!</h3>
                                                    <div class="subtitle">...or click to select a file from your computer</div>
                                                </div>
                                                </vue-dropzone>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit row" style="clear: both; margin-top: 25px;">
                                <div class="col-md-12">
                                    <button v-on:click="processQueue" class="btn btn-lg flat-btn" id="property_submit">Add Property</button>
                                    <!-- <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Add Property"> -->
                                    <!-- <label style="margin-top: 15px; margin-left: 10px;"> Your submission will be reviewed by Administrator before it can be published</label> -->
                                </div>
                            </div>
                        </form>
                        <!-- <form id="password_form" name="password_form" class="form profile-form">
                                <div class="control-group">
                                    <div class="group-title">
                                        Change Password</div>
                                    <div class="group-container row">
                                        <div class="form-message">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-profile-old_pass">
                                                <label for="old_pass">Old Password</label>
                                                <input id="old_pass" class="form-control" value="" name="old_pass" type="password">
                                            </div>
                                            <div class="form-group s-profile-new_pass">
                                                <label for="new_pass">New Password</label>
                                                <input id="new_pass" class="form-control" value="" name="new_pass" type="password">
                                            </div>
                                            <div class="form-group s-profile-new_pass_confirm">
                                                <label for="new_pass_confirm">Confirm New Password</label>
                                                <input id="new_pass_confirm" class="form-control" value="" name="new_pass_confirm" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="submit">
                                                <input class="btn flat-btn" id="password_submit" value="Change Password" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
import Fileuploader from '../FileUploader.vue';
import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";

export default {
    data() {
        return {
            totalsize: 0,
            dropzoneOptions: {
                url: '/api/profile/update',
                addRemoveLinks: true,
                thumbnailWidth: 150,
                maxFiles: 1,
                maxNumberOfFiles: 1,
                parallelUploads: 1,
                autoProcessQueue: false,
                acceptedFiles: 'image/jpeg,image/png,image/gif',
                headers: {
                    "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                },
                maxfilesexceeded: function (files) {
                    this.removeAllFiles();
                    this.addFile(files);
                },
            },
            fileName: '',
        }
    },
    mounted() {

    },
    components: {
        vueDropzone: vue2Dropzone,
    },
    methods: {
        processQueue(){
            this.$refs.myVueDropzone.processQueue();
        },

        sendingEvent (file, xhr, formData){
            this.totalsize = this.totalsize + file.size
            if (this.totalzize > someLimit) xhr.abort()

            formData.append('title_name', this.title);
            formData.append('email', this.email);
            formData.append('phone', this.phone);
            formData.append('mobile', this.mobile);
            formData.append('description', this.desc);
        }
        // uploadImageSuccess(formData, index, fileList) {
        //     this.addProperty(formData, index, fileList);
        // },
        // beforeRemove (index, done, fileList) {
        //     var r = confirm("remove image")
        //     if (r == true) {
        //         done()
        //     } else {
        //     }
        // },
        // editImage (formData, index, fileList) {
            // console.log('edit data', formData, index, fileList)
        // },
    }
}
</script>

<style>
.vue-dropzone>.dz-preview .dz-image{
    height: 10%;
}
</style>
