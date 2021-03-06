var dialog = document.querySelector('dialog');
var button = document.querySelector('#worker__add');

if (! dialog.showModal) {
	dialogPolyfill.registerDialog(dialog);
}

button.addEventListener('click', function() {
	dialog.showModal();
});

dialog.querySelector('.close').addEventListener('click', function() {
	dialog.close();
});

document.querySelectorAll('th.sortable').forEach(function(entry) {
    entry.addEventListener('click', function() {
        location.href = '/workers?' + this.getAttribute('data-orderby') + '=' + this.getAttribute('data-orderdir');
    });
});
