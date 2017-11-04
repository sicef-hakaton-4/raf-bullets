var currentImage = 0;

function nextTrue(companies) {
    currentImage = (currentImage+1)%companies.length;
    $('.slide-img').attr("src", companies[currentImage].image);
}

function nextFalse(companies) {
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
