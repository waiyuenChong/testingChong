<?php 
    if($page != "credential") { 
?>

<!-- [ chat user list ] start -->
<section class="header-user-list">
    <div class="h-list-header">
        <div class="input-group">
            <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
        </div>
    </div>
    <div class="h-list-body">
        <a href="javascript:" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
        <div class="main-friend-cont scroll-div">
            <div class="main-friend-list">
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="javascript:"><img class="media-object img-radius" src="<?= IMG_PATH ?>/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<section class="header-chat">
    <div class="h-list-header">
        <h6>Josephin Doe</h6>
        <a href="javascript:" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
    </div>
    <div class="h-list-body">
        <div class="main-chat-cont scroll-div">
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="javascript:"><img class="media-object img-radius img-radius m-t-5" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">hello Datta! Will you tell me something</p>
                            <p class="chat-cont">about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="javascript:"><img class="media-object img-radius img-radius m-t-5" src="<?= IMG_PATH ?>/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you help me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-list-footer">
        <div class="input-group">
            <input type="file" class="chat-attach" style="display:none">
            <a href="javascript:" class="input-group-prepend btn btn-success btn-attach">
                <i class="feather icon-paperclip"></i>
            </a>
            <input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . ">
            <button type="submit" class="input-group-append btn-send btn btn-primary">
                <i class="feather icon-message-circle"></i>
            </button>
        </div>
    </div>
</section>
<!-- [ chat message ] end -->
<?php } ?>