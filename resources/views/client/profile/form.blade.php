<div class="control-group">
    <div class="group-title">Welcome back, {{ $profileData['name'] }} </div>
    <div class="group-container row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-6">

                    <div class="form-group s-profile-title">
                        <label for="title">Name&nbsp;*</label>
                        <input id="title" class="form-control" value={{ $profileData['name'] }} name="name" required="" type="text">
                    </div>


                </div>

                <div class="col-md-6">

                    <div class="form-group s-profile-email">
                        <label for="email">Email&nbsp;*</label>
                        <input id="email" class="form-control" value={{ $profileData['email'] }} name="email" required="" type="text">
                    </div>
                    {{-- <div class="form-group s-profile-phone">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" value={{ $profileData['phone'] }} name="phone" type="text">
                    </div> --}}

                </div>

            </div>
        </div>

        <div class="col-md-12">
            <label for="desc">About me</label>
            <textarea id="desc" class="form-control" name="desc" rows="8">{{ $profileData['bio'] }}</textarea>
        </div>

        <div class="col-md-12">
            <div class="group-title">Profile Picture</div>
            <div class="group-container row">
                <div class="col-md-12" style="height: 50%">
                    <div class="col-md-12" style="height: 50%">
                        <div class="form-group">
                            {{ Form::label('files', __("Select Files")) }}
                            {{ Form::file('upload_file',['id'=>'upload_file', 'onchange'=>"preview_image();"]) }}
                        </div>
                        <div id="image_preview">
                            @if(isset($profileData) && !empty($profileData['photo']))
                                <div class='col-md-6'>
                                    <a href='#' onClick='delete_server_data({{$profileData['id']}});' class='del_tag_{{$profileData['id']}}'>
                                        <img src='{{url("/")}}/assets/client/layout/img/close-icon.png' alt='Delete file icon' class='del_button_{{$profileData['id']}} img_delete_btn'>
                                    </a>
                                    <a href="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/{{$profileData['photo']}}" data-lightbox='current_uploaded_image' id='SocialMediaBadges'>
                                        <img src="http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/{{$profileData['photo']}}" width='80%' style='padding: 5px' class='img_{{$profileData['id']}}'>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    0%
                                </div>
                            </div>
                            <div id="success" class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="submit row" style="clear: both; margin-top: 25px;">
    <div class="col-md-12">
        <button type="submit" class="btn btn-lg flat-btn" id="profile_submit">Submit</button>
    </div>
</div>

@section('scripts')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets') }}/admin/layout/scripts/lightbox.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets') }}/admin/layout/scripts/jquery.form.js"></script>
<script>

    jQuery(".select2").select2({
        width: '100%'
    });

    if (/*@cc_on!@*/false) { // check for Internet Explorer
        document.onfocusin = onFocus;
    } else {
        window.onfocus = onFocus;
    }

    function preview_image()
    {
        var total_file=document.getElementById("upload_file").files.length;
        for(var i=0;i<total_file;i++)
        {
            $('#image_preview').append("<div class='col-md-6'><a href='#' onClick='remove_img("+i+");' class='del_tag_"+i+"'><img src='{{url("/")}}/assets/admin/layout/img/close-icon.png' alt='Delete file icon' class='del_button_"+i+" img_delete_btn'></a>"+"<a href='"+URL.createObjectURL(event.target.files[i])+"' data-lightbox='current_uploaded_image' id='SocialMediaBadges'><img src='"+URL.createObjectURL(event.target.files[i])+"' width='80%' style='padding: 5px' class='img_"+i+"'></a></div>");
            $('.progress').hide();
        }

    }

    function remove_img(id)
    {
        img_class = "img_"+id;
        del_tag = "del_tag_"+id;
        del_class = "del_button_"+id;
        $("."+img_class).remove();
        $("."+del_tag).remove();
        $("."+del_class).remove();
    }

    function delete_server_data(id)
    {
        var chk = confirm('Do you want to delete this file?');
        if (chk != true) {
            return false;
        }
    }

    $('#reset').on('click', function() {
        $('div#image_preview').empty();
        event.target.files = [];
    });

</script>
@endsection
