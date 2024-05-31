@include('base')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card card-bordered">
                    <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                         style="overflow-y: scroll !important; height:400px !important;">
                        <div class="media media-chat">
                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                 alt="...">
                            <div class="media-body">
                                <p>Hi</p>
                                <p>How are you ...???</p>
                                <p>What are you doing tomorrow?<br> Can we come up a bar?</p>

                            </div>
                        </div>


                        <div class="media media-chat media-chat-reverse">
                            <div class="media-body">
                                <p>Hiii, I'm good.</p>
                                <p>How are you doing?</p>
                                <p>Long time no see! Tomorrow office. will be free on sunday.</p>

                            </div>
                        </div>


                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                        </div>
                    </div>

                    <div class="publisher bt-1 border-light">
                        <i class="fa fa-smile"></i><textarea class="publisher-input"></textarea>
                        <span class="publisher-btn file-group">
                                  </span>
                        <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a>
                        <a class="publisher-btn text-info" href="#" onclick="addMessage()" data-abc="true"><i
                                class="fa fa-paper-plane"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function addMessage() {
        let message = $('.publisher-input').val()
        const htmlCode = `
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>${message}</p>

                    </div>
                </div>
            `;
        $('#chat-content').append(htmlCode);
        $('#chat-content').scrollTop($('#chat-content')[0].scrollHeight);
        $('.publisher-input').val('')
    }
</script>
@include('partial.footer')

