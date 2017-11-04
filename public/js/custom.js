var currentIndex = 0;

function nextImageTrue(companies) {
    currentIndex = (currentIndex+1)%companies.length;
    $('.slide-img').attr("src", companies[currentIndex].image);
}

function nextImageFalse(companies) {
    currentIndex = (currentIndex+1)%companies.length;
    $('.slide-img').attr("src", companies[currentIndex].image);
}

function love(companies) {
    var company = companies[currentIndex];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
    }});
    // window.location.href = '/company/'+company.id
}

function closeSlider() {
    $('.images-slider').hide();
}

function nextMotoTrue(companies) {
    currentIndex = (currentIndex+1)%companies.length;
    $('.moto-text').html(companies[currentIndex].moto);
}

function nextMotoFalse(companies) {

}

function parseArea(value) {
    switch (value) {
        case '0':
            return 'Algorithms';
            break;
        case '1':
            return 'Web development';
            break;
        case '2':
            return 'Front-end';
            break;
        case '3':
            return 'Back-end';
            break;
        case '4':
            return 'Machine learning';
            break;
        case '5':
            return 'Android development';
            break;
        case '6':
            return 'Data bases';
            break;
    }
}
function nextJobTrue(jobs) {
    currentIndex = (currentIndex+1)%jobs.length;
    $('.job-title').html(jobs[currentIndex].title);
    var job = jobs[currentIndex];
    var areas = job.areas.split(',');
    $('.areas').empty();
    for(var i=0; i<areas.length; i++){
        $('.areas').append('<span style="font-size: 34px">'+parseArea(areas[i])+'</span><br>');
    }
}

function nextJobFalse(jobs) {
    currentIndex = (currentIndex+1)%jobs.length;
    $('.moto-text').html(jobs[currentIndex].title);
}