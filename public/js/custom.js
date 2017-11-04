var currentImage = 0;

function nextImageTrue(companies) {
    currentImage = (currentImage+1)%companies.length;
    $('.slide-img').attr("src", companies[currentImage].image);
}

function nextImageFalse(companies) {
    currentImage = (currentImage+1)%companies.length;
    $('.slide-img').attr("src", companies[currentImage].image);
}

function love(companies) {
    var company = companies[currentImage];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
    }});
    // window.location.href = '/company/'+company.id
}

function closeSlider() {
    $('.images-slider').hide();
}

function nextMotoTrue(companies) {
    currentImage = (currentImage+1)%companies.length;
    $('.moto-text').html(companies[currentImage].moto);
}

function nextMotoFalse(companies) {

}