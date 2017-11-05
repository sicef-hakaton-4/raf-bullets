var currentIndex = 0;
var currentIndexJob = 0;
function nextImageTrue(companies) {
    var company = companies[currentIndex];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
    }});

    currentIndex = (currentIndex+1)%companies.length;

    $('.slide-img').attr("src", companies[currentIndex].image);
}

function nextImageFalse(companies) {
    currentIndex = (currentIndex+1)%companies.length;
    $('.slide-img').attr("src", companies[currentIndex].image);
}

function loveImage(companies) {
    var company = companies[currentIndex];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
        window.location.href = '/company/'+company.id

    }});

    currentIndex = (currentIndex+1)%companies.length;
}

function closeSlider() {
    $('.slider').hide();
}

function nextMotoTrue(companies) {
    var company = companies[currentIndex];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
    }});

    currentIndex = (currentIndex+1)%companies.length;

    $('.moto-text').text(companies[currentIndex].moto);
}

function nextMotoFalse(companies) {
    currentIndex = (currentIndex+1)%companies.length;
    $('.moto-text').text(companies[currentIndex].moto);
}

function loveMoto(companies) {
    var company = companies[currentIndex];
    $.ajax({url: "/developer/company/"+company.id, success: function(result){
        console.log(result);
        window.location.href = '/company/'+company.id

    }});

    currentIndex = (currentIndex+1)%companies.length;
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
    job = jobs[currentIndexJob];
    console.log(job);
    $.ajax({url: "/developer/job/"+job.id, success: function(result){
        console.log(result);
    }});
    currentIndexJob = (currentIndexJob+1)%jobs.length;
    $('.job-title').html(jobs[currentIndexJob].title);
    var job = jobs[currentIndexJob];
    var areas = job.areas.split(',');
    $('.areas').empty();
    for(var i=0; i<areas.length; i++){
        $('.areas').append('<span style="font-size: 34px">'+parseArea(areas[i])+'</span><br>');
    }
}

function nextJobFalse(jobs) {
    job = jobs[currentIndexJob];
    console.log(job);
    currentIndexJob = (currentIndexJob+1)%jobs.length;
    $('.job-title').html(jobs[currentIndexJob].title);
    var job = jobs[currentIndexJob];
    var areas = job.areas.split(',');
    $('.areas').empty();
    for(var i=0; i<areas.length; i++){
        $('.areas').append('<span style="font-size: 34px">'+parseArea(areas[i])+'</span><br>');
    }
}

function loveJob(jobs) {
    job = jobs[currentIndexJob];
    console.log(job);
    $.ajax({url: "/developer/job/"+job.id, success: function(result){
        console.log(result);
        window.location.href = '/company/job/'+job.id

    }});
    currentIndexJob = (currentIndexJob+1)%jobs.length;
    $('.job-title').html(jobs[currentIndexJob].title);
    var job = jobs[currentIndexJob];
    var areas = job.areas.split(',');
    $('.areas').empty();
    for(var i=0; i<areas.length; i++){
        $('.areas').append('<span style="font-size: 34px">'+parseArea(areas[i])+'</span><br>');
    }

}

function removeCompany(id) {

    $.ajax({url: "/developer/company/"+id+"/delete", success: function(result){
        console.log(result);
    }});
}