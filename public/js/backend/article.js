$(document).ready(function() {
	var titleInput = $('#input-title');
	var slugInput = $('#input-slug');
	var setSlugInput = true;
	var submitButton = $('#input-submit');

	slugInput.keyup(function() {
		setSlugInput = false;
	});

	titleInput.keyup(function() {
		if (setSlugInput || slugInput.val() == '')
			slugInput.val(convertToSlug(titleInput.val()));
	});

	$('#input-publish').click(function() {
		if ($(this).is(':checked')) {
			submitButton.html('Post article').removeClass('btn-success').addClass('btn-primary');
		} else {
			submitButton.html('Save draft').removeClass('btn-primary').addClass('btn-success');
		}
	});
});

function convertToSlug(string) {
	return string.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
}