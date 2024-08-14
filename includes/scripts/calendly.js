document.getElementById('in-person-button').addEventListener('click', function() {
    document.getElementById('in-person-button').classList.add('active');
    document.getElementById('online-button').classList.remove('active');
    document.getElementById('calendly-in-person').classList.add('active');
    document.getElementById('calendly-online').classList.remove('active');
});

document.getElementById('online-button').addEventListener('click', function() {
    document.getElementById('online-button').classList.add('active');
    document.getElementById('in-person-button').classList.remove('active');
    document.getElementById('calendly-online').classList.add('active');
    document.getElementById('calendly-in-person').classList.remove('active');
});