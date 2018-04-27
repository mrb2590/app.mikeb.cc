var maGlobal = module.exports;



/**
 * GLOBAL VARIABLES
 */

maGlobal.saveIcon = '<i class="fa fa-fw fa-floppy-o"></i>';
maGlobal.cancelIcon = '<i class="fa fa-fw fa-times"></i>';
maGlobal.loadingIcon = '<i class="fa fa-fw fa-spinner fa-pulse"></i>';
maGlobal.removeConfirm = '<i class="fa fa-fw fa-exclamation-circle"></i> Click to Confirm';



/**
 * GLOBAL OPTIONS
 */


// Set toastr options
toastr.options.progressBar = false;
toastr.options.preventDuplicates = true;
toastr.options.timeOut = 8000;



/**
 * GLOBAL FUNCTIONS
 */

// Clear session storage on logout
maGlobal.logout = () => {
	//sessionStorage.clear();
};


/**
 * GLOBAL EVENTS
 */

maGlobal.bindListeners = () => {

	// Default ajax options
	$.ajaxSetup({
		headers: {
			'Accept': 'application/json'
		},
		contentType: "application/json",
		xhrFields: {
			withCredentials: true
		},
		cache: false
	});

    // Window resizing
    $(window).on('resize', function() {
        // Clear sidebar from hover effects
		$('#sidebar').css('width', '');
		$('#main-content').css('width', '');
    });

	// Open siderbar-md when hovering
	$('#sidebar').on({
		mouseenter: () => {
			var width = $(window).width();
			if (width >= 768 && width < 1199) {
				$('#sidebar').css('width', '280px');
				$('#main-content').css('width', 'calc(100% - 280px)');
			} else {
				$('#sidebar').css('width', '');
				$('#main-content').css('width', '');
			}
		},
		mouseleave: () => {
			var width = $(window).width();
			if (width >= 768 && width < 1199) {
				$('#sidebar').css('width', 'calc(1.28571429em + 30px)');
				$('#main-content').css('width', 'calc(100% - 1.28571429em - 30px)');
			} else {
				$('#sidebar').css('width', '');
				$('#main-content').css('width', '');
			}
		}
	});

};
