document.addEventListener('DOMContentLoaded', function() {
    var body = document.body;
    if (getComputedStyle(body).backgroundColor === 'none') {
        body.classList.add('body-has-no-background');
    } else {
        body.classList.add('body-has-background');
    }
});
