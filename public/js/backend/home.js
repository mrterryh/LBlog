$(document).ready(function() {
	setTimeout(function() {
		var updateChecker = $('#update-checker');
		var updateCheckerBody = updateChecker.find('.panel-body');

		$.get('/version', function(data) {
			if (data.newer) {
				var content = '<p>There is a new version of LBlog available (<strong>' + data.latestVersion + '</strong>)</p>';
				var content = content + '<p><a href="#">Click here for more information.</a></p>';

				updateChecker.removeClass('panel-default').addClass('panel-danger');
				updateCheckerBody.html(content);

				return;
			}

			var content = '<p>Your version of LBlog is up to date!</p>';

			updateChecker.removeClass('panel-default').addClass('panel-success');
			updateCheckerBody.html(content);
		});
	}, 1000);
});