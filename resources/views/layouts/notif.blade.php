<ul class="notif-wrap">
    @if(count(App\Modules\Helpers::notifications()) > 0)
        @foreach(App\Modules\Helpers::notifications() as $notif)
            <li class="cstm_li">
                @if($notif->type === 'p_approved')
                    <a href="{{ URL::to('mypet/details/'.$notif->url_id) }}">
                        <div class="notif-body">
                            <p class="ml-5">
                                Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> your pet post is approved.
                                <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                            </p>
                        </div>
                    </a>
                @elseif($notif->type === 'p_declined')
                    <a href="{{ URL::to('mypet/details/'.$notif->url_id) }}">
                        <div class="notif-body">
                            <p class="ml-5">
                                Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> your pet post was declined.
                                <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                            </p>
                        </div>
                    </a>
                @elseif($notif->type === 'claim_request')
                    <a href="{{ URL::to('claim-request') }}">
                        <div class="notif-body">
                            <p class="ml-5">
                                Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> you have a claim request on your post.
                                <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                            </p>
                        </div>
                    </a>
                @elseif($notif->type === 'adopt_approved')
                    <a href="javascript:void(0)" style="pointer-events: none;">
                        <div class="notif-body">
                            <p class="ml-5">
                                Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> Your Adopt Request is approved
                                <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                            </p>
                        </div>
                    </a>
                @elseif($notif->type === 'adopt_declined')
                    <a href="javascript:void(0)" style="pointer-events: none;">
                        <div class="notif-body">
                            <p class="ml-5">
                                Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> Your Adopt Request was declined. 
                                <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                            </p>
                        </div>
                    </a>
                @elseif($notif->type === 'comments')
                    <a href="{{ URL::to('blogs/'.$notif->url_id) }}">
                        <div class="notif-body">
                            <img class="avatar" height="50" width="50" src="{{ asset('asset/images/users/thumb/'.$notif->identifier->profile) }}">
                            @if($notif->comment_id == Auth::user()->id)
                                <p class="ml-5">
                                    <strong>You</strong> commented on your own blog post.
                                    <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                                </p>
                            @else
                                <p class="ml-5">
                                    <strong>{{ ucfirst($notif->identifier->fname).' '.ucfirst($notif->identifier->lname) }}</strong> commented on your blog post.
                                    <br/><small style="font-size:10px;">{{ date('M d, Y h:i A', strtotime($notif->created_at)) }}</small>
                                </p>
                            @endif
                        </div>

                    </a>
                @endif
            </li>
        @endforeach
    @else
        <a href="javascript:void(0)" style="pointer-events: none;">
            <div class="notif-body">
                <p class="ml-5">
                    No Notifications
                </p>
            </div>
        </a>
    @endif
</ul>