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

// Collapse sidebar
maGlobal.collapseSidebar = function() {
	var $body = $('body'),
		width = $(window).width();

	// Small - Collapse
	if (width < 768) {
		if (!maGlobal.sidebarIs('collapsed')) {
			if ($('#sidebar-icon').hasClass('tcon-transform')) {
				transformicon.revert('#sidebar-icon');
			}
			$body.removeClass('sidebar-minimized')
				 .removeClass('sidebar-collapsed')
				 .addClass('sidebar-collapsed');
		}
	}

	// Everything else - Minimized
	else {
		if (!maGlobal.sidebarIs('sidebar-minimized')) {
			if ($('#sidebar-icon').hasClass('tcon-transform')) {
				transformicon.revert('#sidebar-icon');
			}
			$body.removeClass('sidebar-minimized')
				 .removeClass('sidebar-collapsed')
				 .addClass('sidebar-minimized');
		}
	}
};

// Expand sidebar
maGlobal.expandSidebar = function() {
	var $body = $('body');

	if (maGlobal.sidebarIs('collapsed') || maGlobal.sidebarIs('minimized')) {
		if (!$('#sidebar-icon').hasClass('tcon-transform')) {
			transformicon.toggle('#sidebar-icon');
		}
		$body.removeClass('sidebar-minimized')
			 .removeClass('sidebar-collapsed');
	}
};

// Set the width of the sidebar based on window width
maGlobal.SetSidbarWidth = function() {
	var width = $(window).width();

	// Small
	if (width < 768) {
		maGlobal.collapseSidebar();
	}

	// Medium
	else if (width >= 768 && width < 1199) {
		maGlobal.collapseSidebar();
	}

	// Large
	else {
		maGlobal.expandSidebar();
	}
};

// Return true or false based on state passed
maGlobal.sidebarIs = function(state) {
	var $body = $('body'),
		currentState = 'expanded';

	if ($body.hasClass('sidebar-minimized')) {
		currentState = 'minimized';
	} else if ($body.hasClass('sidebar-collapsed')) {
		currentState = 'collapsed';
	}

	return currentState == state;
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

	// Page load
	$(document).ready(function() {
		maGlobal.SetSidbarWidth();
	});

    // Window resizing
    $(window).on('resize', function() {
		maGlobal.SetSidbarWidth();
    });

	// Toggle sidebar with sidebar icon
	$('#sidebar-icon').on('click', function() {

		// Open
		if (maGlobal.sidebarIs('collapsed') || maGlobal.sidebarIs('minimized')) {
			maGlobal.expandSidebar();
		}

		// Close
		else {
			maGlobal.collapseSidebar();
		}
	});
};
