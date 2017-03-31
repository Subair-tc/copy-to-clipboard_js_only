jQuery('document').ready( function() {
	var clipboard = new Clipboard('.ctl_copy_to_btn');

    clipboard.on('success', function(e) {
		console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
});

	