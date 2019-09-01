// JavaScript Document

var tableColumns = [];

$(window).scroll(function(){
    var top = $(this).scrollTop();
    var big_tb = $(".big_tb");
    var big_tb_offset = big_tb.offset();
    var table_top = big_tb_offset ? big_tb_offset.top : 0;
    var head = $(".big_tb .head1");
    var width = head.css('width');
    var is_mobile = (width <= 666);

    if ($('div').is('.banner_wrapper')) {
      var header = $('header');
      var banner_height = is_mobile ? 40 : 60;

      if (top >= banner_height) {
        if (!header.hasClass('fixed')) {
          header.addClass('fixed');
          header.css('top', 0);
          $('main').css('padding-top', 0);
          $('.result_search').css('top', 20+banner_height);
          $('.delimiter_before_tabs').css('height', 15+banner_height);
          $('main.page_txt').css('padding-top', 40+banner_height);
        }
      } else {
        if (header.hasClass('fixed')) {
          header.removeClass('fixed');
          $('main').css('padding-top', 0);
          $('.result_search').css('top', 20);
          $('.delimiter_before_tabs').css('height', 15);
          $('main.page_txt').css('padding-top', 40);
        }
      }
    }

    if (top >= table_top - 52) {
        var fixed = head.hasClass('head_fixed');
        if (!fixed) {
            if (is_mobile) {
                $(".alignment td").height(78);
            }
            head.addClass('head_fixed');
            head.css('width', width);

            if (big_tb.hasClass('ico_analysis')) {
                var x = 0;
                $(".big_tb .alignment td").each(function(){
                    tableColumns[x++] = $(this).css('width');
                });
            }

            var x = 0;
            $(".head1 tr.header-columns th").each(function(){
                $(this).css('width', tableColumns[x]);
                $(".alignment td:eq("+x+")").css('width', tableColumns[x]);
                x++;
            });
        }
    } else {
        if (head.hasClass('head_fixed')) {
            $(".alignment td").height(1);
            head.removeClass('head_fixed');
        }
    }
});

// FILE UPLOAD start
function onCancel(e) {
    var index = $(this).parents("li").data("index");
    $(this).parents("form").find(".upload").upload("abort", parseInt(index, 10));
}

function onCancelAll(e) {
    $(this).parents("form").find(".upload").upload("abort");
}

function onBeforeSend(formData, file) {
    formData.append("test_field", "test_value");
    // return (file.name.indexOf(".jpg") < -1) ? false : formData; // cancel all jpgs
    return formData;
}

function onQueued(e, files) {
    var html = '';
    for (var i = 0; i < files.length; i++) {
        html += '<li data-index="' + files[i].index + '"><span class="content"><span class="file">' + files[i].name + '</span><span class="progress"></span></span><span class="bar"></span></li>';
    }

    $(this).parents("form").find(".filelist.queue")
        .append(html);
}

function onStart(e, files) {
    $(this).parents("form").find(".filelist.queue")
        .find("li")
        .find(".progress").text("Waiting");
}

function onComplete(e) {
    modalSuccess();
}

function modalSuccess() {
    $.arcticmodal('close');
    $('#message_ok').arcticmodal();
    return false;

}

function addIcoModalSuccess() {
    $.arcticmodal('close');
    $('#add_ico_message_ok').arcticmodal();
    return false;

}

function onFileStart(e, file) {
    $(this).parents("form").find(".filelist.queue")
        .find("li[data-index=" + file.index + "]")
        .find(".progress").text("0%");
}

function onFileProgress(e, file, percent) {
    var $file = $(this).parents("form").find(".filelist.queue").find("li[data-index=" + file.index + "]");

    $file.find(".progress").text(percent + "%")
    $file.find(".bar").css("width", percent + "%");
}

function onFileComplete(e, file, response) {
    if (response.trim() === "" || response.toLowerCase().indexOf("error") > -1) {
        $(this).parents("form").find(".filelist.queue")
            .find("li[data-index=" + file.index + "]").addClass("error")
            .find(".progress").text(response.trim());
    } else {
        var $target = $(this).parents("form").find(".filelist.queue").find("li[data-index=" + file.index + "]");
        $target.find(".file").text(file.name);
        $target.find(".progress").remove();
        $target.find(".cancel").remove();
        $target.appendTo($(this).parents("form").find(".filelist.complete"));
    }
}

function onFileError(e, file, error) {
    $(this).parents("form").find(".filelist.queue")
        .find("li[data-index=" + file.index + "]").addClass("error")
        .find(".progress").text("Error: " + error);
}

function onChunkStart(e, file) {}

function onChunkProgress(e, file, percent) {}

function onChunkComplete(e, file, response) {}

function onChunkError(e, file, error) {}
// FILE UPLOAD end

function showTelegramPopup() {
    var tpc = $.cookie('telegram-popup-counter');
    if (tpc == undefined) {
        tpc = 0;
    } else {
        tpc = Number(tpc);
    }
    if (tpc < 3) {
        tpc++;
        var tpd = $.cookie('telegram-popup-date');
        if (!tpd) {
            $.cookie('telegram-popup-date', new Date(), {expires: 7});
            $.cookie('telegram-popup-counter', tpc, {expires: 1000});
            setTimeout(function () {$('#telegram-popup').arcticmodal();}, 30 * 1000);
        }
    }
}

$(document).ready(function(){
    $('.no-active-pool').each(function () {
        if (!$(this).hasClass('first')) {
            $(this).hide();
        }
    });

    if($(".upload").length>0){
        $(".upload").upload({
            autoUpload: false,
            leave: false,
            label: $(this).data('title'),
            postData: {reviewCode: $('#reviewCode').val()}
        }).on("start.upload", onStart)
            .on("complete.upload", onComplete)
            .on("filestart.upload", onFileStart)
            .on("fileprogress.upload", onFileProgress)
            .on("filecomplete.upload", onFileComplete)
            .on("fileerror.upload", onFileError)
            .on("chunkstart.upload", onChunkStart)
            .on("chunkprogress.upload", onChunkProgress)
            .on("chunkcomplete.upload", onChunkComplete)
            .on("chunkerror.upload", onChunkError)
            .on("queued.upload", onQueued);
    }

    $(".submit_review").on('click', function(){
        if ($("span.file").length) {
            $.ajax({
                type: "POST",
                url: $('.review_form').attr('action'),
                data: {
                    poolId: $('#poolId').val(),
                    reviewCode: $('#reviewCode').val(),
                    reviewText: $('#reviewText').val(),
                    reviewContacts: $('#reviewContacts').val()
                },
                success: function () {
                    $(".upload").upload("start");
                }
            });
        }
    });

    $(".submit_ico_review").on('click', function(){
        if ($("span.file").length) {
            $.ajax({
                type: "POST",
                url: $('.review_form').attr('action'),
                data: {
                    icoId: $('#icoId').val(),
                    reviewCode: $('#reviewCode').val(),
                    reviewText: $('#reviewText').val(),
                    reviewContacts: $('#reviewContacts').val()
                },
                success: function () {
                    $(".upload").upload("start");
                }
            });
        }
    });

    $(".pool-add-button").on('click', function(){
        var poolName = $('#poolName');
        var poolLink = $('#poolLink');
        var poolComments = $('#poolComments');
        var poolContacts = $('#poolContacts');
        if ((poolContacts.val().trim() != '') && poolName.val() && poolLink.val()) {
            $.arcticmodal('close');
            $.ajax({
                type: "POST",
                url: $('.add_pool_form').attr('action'),
                data: {
                    name: poolName.val(),
                    link: poolLink.val(),
                    comments: poolComments.val(),
                    contacts: poolContacts.val()
                },
                success: function () {
                    modalSuccess();
                    poolName.val('');
                    poolLink.val('');
                    poolComments.val('');
                    poolContacts.val('');
                }
            });
        } else if (poolContacts.val().trim() == '') {
            poolContacts.css('background-color', '#f2b3ba');
        }
    });

    $(".ico-add-button").on('click', function(){
        var icoContacts = $('#icoContacts');
        var icoName = $('#icoName');
        var icoLink = $('#icoLink');
        var icoComments = $('#icoComments');
        if ((icoContacts.val().trim() != '') && icoName.val() && icoLink.val()) {
            $.arcticmodal('close');
            $.ajax({
                type: "POST",
                url: $('.add_ico_form').attr('action'),
                data: {
                    name: icoName.val(),
                    link: icoLink.val(),
                    comments: icoComments.val(),
                    contacts: icoContacts.val()
                },
                success: function () {
                    addIcoModalSuccess();
                    icoContacts.val('');
                    icoName.val('');
                    icoLink.val('');
                    icoComments.val('');
                }
            });
        } else if (icoContacts.val().trim() == '') {
            icoContacts.css('background-color', '#f2b3ba');
        }
    });

    $(".bug-report-button").on('click', function(){
        $.ajax({
            type: "POST",
            url: $('.bug_report_form').attr('action'),
            data: {
                details: $('#bugDetails').val(),
                contacts: $('#bugContacts').val()
            },
            success: function () {
                modalSuccess();
            }
        });
    });

    $(".feedback-submit-button").on('click', function(){
        if ($('#feedbackContacts').val().trim() != '') {
            $.ajax({
                type: "POST",
                url: $('.feedback-form').attr('action'),
                data: {
                    contacts: $('#feedbackContacts').val(),
                    subject: $('#feedbackSubject').val(),
                    message: $('#feedbackMessage').val()
                },
                success: function () {
                    modalSuccess();
                }
            });
        } else {
            $('#feedbackContacts').css('background-color', '#f2b3ba');
        }
    });

    $(".filelist.queue").on("click", ".cancel", onCancel);
    $(".cancel_all").on("click", onCancelAll);

    $(".reviews_arrow").click(function(){
        $(".reviews_list").slideToggle();
        return false;
    });

    $('.open_mob').click(function(){
        $(this).parents('.have_sub').find('.wr_sub_menu').slideToggle('400');
        $(this).parents('.have_sub').find('.open_mob').toggleClass('active');

    });

    $('.pull').click(function(){
        $(this).parents('.wrap_header').find('.wr_menu').slideToggle('400');
        $(this).parents('.wrap_header').find('.pull').toggleClass('active');

    });

    /*---heightblock---*/
    function setEqualHeight(columns){
        var tallestcolumn=0;
        columns.each(
            function(){
                currentHeight=$(this).height();
                if(currentHeight>tallestcolumn) {
                    tallestcolumn=currentHeight;
                }
            }
        );
        columns.height(tallestcolumn);
    }

    $('.tab_modal').mTab({
        navigation: ".tab_main_nav2"
        ,container: ".tab_cont2"
        ,activeTab: 1
        ,activeClass: "active"
        ,scrollOffset: true
        ,accordScreen: 0
        ,toggleClose: true
        ,animation: false
        ,openWithUrl: true
        ,callbackonclick:  function() {  }
        ,callback: function() {  }
    });

    $('.tab_modal').mTab({
        navigation: ".tab_main_nav3"
        ,container: ".tab_cont2"
        ,activeTab: 1
        ,activeClass: "active"
        ,scrollOffset: true
        ,accordScreen: 0
        ,toggleClose: true
        ,animation: false
        ,openWithUrl: true
        ,callbackonclick:  function() {  }
        ,callback: function() {  }
    });

    function redirectToDetails(id) {
        var lang = $('html').attr('lang');
        $(location).attr('href', '/' + lang + '/details/' + id);
    }

    $('.open_list4').click(function () {
        redirectToDetails($(this).parent().data('id'));
    });

    $('.open_list3').click(function () {
        redirectToDetails($(this).data('id'));
    });

    $('.feedback-link').click(function () {
        $('#feedback_form').arcticmodal();
    });

    $(".delete_search").on("click", function () {
        $(location).attr('href', '/')
    });

    $.arcticmodal('setDefault', {
        afterOpen: function(data, el) {
            $('body').addClass('active');
        },
        beforeClose: function(data, el) {
            $('body').removeClass('active');
        }
    });

    $('.add-pool-button').click(function(){
        $('#add_pool').arcticmodal();
        return false;
    });

    $('.add-ico-button').click(function(){
        $('#add_ico').arcticmodal();
        return false;
    });

    $('.open_add').click(function(){
        $('#open_add').arcticmodal();
        return false;
    });

    $('.add-bug-button').click(function(){
        $('#add_bug').arcticmodal();
        return false;
    });

    $('.back').click(function(){
        if (window.history.length <= 2) {
            window.location.href = '/';
        } else {
            window.history.back();
        }
    });

    $('.share-link').click(function(){
        window.open($(this).data('url'), '', "width=300,height=500");
    });

    var x = 0;
    $(".big_tb .alignment td").each(function(){
        tableColumns[x++] = $(this).css('width');
    });

    $('.show_pool_link').click(function () {
        $('.hidden_pool_in_ico_details').show();
        $(this).hide();
    });

    $('#lp').click(function () {
        $('#last-deals').toggle();
    });

    $('.only-active-pools').change(function() {
        if (this.checked) {
            $('.no-active-pool').each(function () {
                if (!$(this).hasClass('first')) {
                    $(this).hide();
                }
            });
        } else {
            $('.no-active-pool').show();
        }
    });

    $('.only-active-pools-mobile').change(function() {
        if (this.checked) {
            $('.no-active-pool').each(function () {
                if (!$(this).hasClass('first')) {
                    $(this).hide();
                }
            });
        } else {
            $('.no-active-pool').show();
        }
    });

    $('.head-switcher').click(function () {
        var id = $(this).attr('id');
        $('.head-switcher').removeClass('active');
        $(this).addClass('active');
        switch (id) {
            case 'hs1':
                $('.ico-state-0').hide();
                $('.ico-state-1').hide();
                $('.ico-state-2').hide();
                $('.ico-state-3').hide();
                $('.ico-state-4').show();
                break;
            case 'hs2':
                $('.ico-state-0').hide();
                $('.ico-state-2').hide();
                $('.ico-state-3').hide();
                $('.ico-state-4').hide();
                $('.ico-state-1').show();
                break;
            case 'hs3':
                $('.ico-state-0').hide();
                $('.ico-state-1').hide();
                $('.ico-state-3').hide();
                $('.ico-state-4').hide();
                $('.ico-state-2').show();
                break;
            case 'hs4':
                $('.ico-state-0').hide();
                $('.ico-state-1').hide();
                $('.ico-state-2').hide();
                $('.ico-state-4').hide();
                $('.ico-state-3').show();
                break;
            case 'hs5': $('.ico-analysis-item').show();
                break;
        }
    });

    $('#hs5').click();

    showTelegramPopup();
});
