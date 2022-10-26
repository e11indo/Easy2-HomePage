$('.fa-user').on("mouseenter",function(){
    $('.user-icon').addClass("active");
})

$('.user-icon').on("mouseleave",function(){
    $('.user-icon').removeClass("active");
})

$('.navbar-menu > li').on("mouseenter",function(){
    $('.menu-sub').removeClass("active");
    $(this).children('.menu-sub').addClass("active");
})

$('.menu-sub').on("mouseleave",function(){
    $('.menu-sub').removeClass("active");
})

$('.fa-bars').on("click",function(){
    $(".side-menu").fadeIn(200);
    $('.body').addClass("none");
})

$('.exit').on("click",function(){
    $(".side-menu").fadeOut(200);
    $('.body').removeClass("none");
    $('.top').css("border-bottom","1px solid #e8e8e8");
})

$('.slide-btn').children().eq(0).on("click",function(){
    $(".slide").children().css('display','none');
    $(".slide").children().eq(0).fadeIn(200);
})
$('.slide-btn').children().eq(1).on("click",function(){
    $(".slide").children().css('display','none');
    $(".slide").children().eq(1).fadeIn(200);
})
$('.slide-btn').children().eq(2).on("click",function(){
    $(".slide").children().css('display','none');
    $(".slide").children().eq(2).fadeIn(200);
})

$('.question').on("click",function(){
    var test = $(this).next().css("display");
    
    if(test == 'block'){
        $(this).next().slideUp();
    }
    else{
        $('.answer').slideUp();
        $(this).next().slideDown();
    }
})


var url = location.href;
$(window).load(function(){
    $('.menu-desc > a').each(function(){
        $(this).removeClass('active');

        if($(this).attr("href") == url){
            $(this).addClass('active');
            $(this).parents('li').addClass('active');
        }
    })
    $('.side-content-box > a').each(function(){
        $(this).removeClass('active');

        if($(this).attr("href") == url){
            $(this).addClass('active');
        }
    })
})


$('#one').on("click",function(){
    $('#two-content').css('display','none');
    $('#two').removeClass('active');
    $('#one-content').fadeToggle(200);
    $('#one').toggleClass('active');
})

$('#two').on("click",function(){
    $('#one-content').css('display','none');
    $('#one').removeClass('active');
    $('#two-content').fadeToggle(200);
    $('#two').toggleClass('active');
})

$('#find_id').on("click",function(){
    $('#find-main-pw').removeClass('active');
    $('#find_pw').removeClass('active');
    $('#find-main-id').addClass('active');
    $('#find_id').addClass('active');
})
$('#find_pw').on("click",function(){
    $('#find-main-id').removeClass('active');
    $('#find_id').removeClass('active');
    $('#find-main-pw').addClass('active');
    $('#find_pw').addClass('active');
})



function register_check(){
    let check = document.register
    var password = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,16}$/;
    var tel = /^[0-9]+/g
    var userId = /^[A-Za-z0-9]{6,12}$/

    if(check.userId.value == ""){
        alert("아이디를 입력하세요.")
        check.userId.focus()
        return false // 아래 코드 진행하지 말기
    }

    if(check.email.value == ""){
        alert("이메일을 입력하세요.")
        check.email.focus()
        return false // 아래 코드 진행하지 말기
    }

    if(check.password.value == ""){
        alert("비밀번호를 입력하세요.")
        check.password.focus()
        return false // 아래 코드 진행하지 말기
    }

    if(check.nickname.value == ""){
        alert("별명을 입력하세요.")
        check.nickname.focus()
        return false // 아래 코드 진행하지 말기
    }

    if(check.tel.value == ""){
        alert("전화번호를 입력하세요.")
        check.tel.focus()
        return false; // 아래 코드 진행하지 말기
    }

    if(check.userId.value.length <6 || check.userId.value.length >12 || !userId.test(check.userId.value)){
        alert("아이디는 6 ~ 12글자로 영어+숫자만 입력해주세요.")
        check.userId.focus();
        return false;
    }

    if(!password.test(check.password.value)){
        alert("비밀번호는 영문자+숫자+특수문자 조합으로 8~16자리를 사용해야 합니다.");
        check.password.focus();
        return false
    }

    if(check.password.value !== check.password_confirmation.value){
        alert("비밀번호가 일치하지 않습니다.");
        check.password.focus();
        return false
    }

    if(check.nickname.value.length <2 || check.nickname.value.length >10){
        alert("별명은 2 ~ 10글자로 입력해주세요.")
        check.nickname.focus();
        return false;
    }

    if(!tel.test(check.tel.value)){
        alert("전화번호는 숫자만 입력 가능합니다.")
        check.tel.focus();
        return false;
    }
    if(check.tel.value.length <11 || check.tel.value.length >11 ){
        alert("전화번호는 11자리만 입력 가능합니다.")
        check.tel.focus();
        return false;
    }


}
