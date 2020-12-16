<div class="agent_bg_widget widget">
    <div class="agent_widget">
        <div class="agent_pic">
            <a href="agent.html" title="">
                @if(isset($data['seller']['photo']))
                <img src="{{ url("http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/").$data['seller']['photo'] }}" alt="" />
                @else
                <img src="../../uploads/demo-user.png" alt="" />
                @endif
                <h5>{{ $data['seller']['name'] }}</h5>
            </a>
        </div>

        <!-- <div>
            <span><i class="fa fa-phone"> </i> +1 9090909090</span>
        </div>
        <div>
            <span><i class="fa fa-envelope"> </i> agent@company.com</span>
        </div> -->

        <!-- <a href="agent.html" title="" class="btn contact-agent">Find more</a> -->
        <a href="{{route('chat',$data['seller']['id'])}}" title="" class="btn contact-agent" style="background-color: black; margin: 10px; margin-top: 20px"><i class="fa fa-comments-o"></i> Message Seller</a>
        <a href="agent.html" title="" class="btn contact-agent" style="margin: 10px"><i class="fa fa-money"></i> Make Offer</a>
    </div>
</div><!-- Follow Widget -->
