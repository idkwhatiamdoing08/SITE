let numImg = 1;
let cout = 16;

function ChangeImage() {
    if(numImage<=9){
        $("#main_img").attr('src','img/00' + numImage + '.jpg').hide().slideDown();
    }
    else{
        $("#main_img").attr('src','img/0' + numImage + '.jpg').hide().slideDown();
    }
}
function Leftclick() {
    if (numImage > 1) {
        numImage--;
    }  else {
        numImage = cout;
    }
    ChangeImage();
}
function Rightclick() {
    if (numImage < cout) {
        numImage++;
    } else {
        numImage = 1;
    }
    ChangeImage();
}

function Show(x){
    numImage=x;
    ChangeImage();
    $('.main').addClass('main_active');
    $('body').addClass('hidden');
    $('.btn_close').click(function () {
        $('.main').removeClass('main_active');
        $('body').removeClass('hidden');
    });

}