$(function () {
  "use strict";
  

  // Applying perfect-scrollbar
  if ($(".chat-aside .tab-content #chats").length) {
    const sidebarBodyScroll = new PerfectScrollbar(
      ".chat-aside .tab-content #chats"
    );
  }
  if ($(".chat-aside .tab-content #calls").length) {
    const sidebarBodyScroll = new PerfectScrollbar(
      ".chat-aside .tab-content #calls"
    );
  }
  if ($(".chat-aside .tab-content #contacts").length) {
    const sidebarBodyScroll = new PerfectScrollbar(
      ".chat-aside .tab-content #contacts"
    );
  }

  if ($(".chat-content .chat-body").length) {
    const sidebarBodyScroll = new PerfectScrollbar(".chat-content .chat-body");
  }


  var idArray = [];



  $('.chat-list .chat-item').each(function() {
    $(this).on('click', function() {
      var id = $(this).data('id');
      
      idArray.push(id)
      console.log(idArray);
      $('.chat-content').toggleClass('show');
    });
  });

  

  $("#backToChatList").on("click", function (index) {
    if(idArray > 0){
        idArray.pop()
        console.log(idArray)
    }
    $(".chat-content").toggleClass("show");
  });

  
});
