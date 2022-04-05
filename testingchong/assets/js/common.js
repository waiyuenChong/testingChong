function notify(title, message, type) {
	$.growl(
		{
			icon: "",
			title: title,
			message: message,
			url: "",
		},
		{
			element: "body",
			type: type,
			allow_dismiss: true,
			placement: {
				from: "bottom",
				align: "right",
			},
			offset: {
				x: 30,
				y: 30,
			},
			spacing: 10,
			z_index: 999999,
			delay: 2500,
			timer: 3888,
			url_target: "_blank",
			mouse_over: false,
			animate: {
				enter: "animated fadeIn",
				exit: "animated fadeOut",
			},
			icon_type: "class",
			template:
				'<div data-growl="container " class="alert px-md-3" role="alert" style=";border-radius:1.25rem;">' +
				'<button type="button" class="btn-close float-end ps-5 ms-5 mb-2" aria-label="Close" data-growl="dismiss">' +
				// '<span aria-hidden="true">&times;</span>' +
				// '<span class="sr-only">Close</span>' +
				"</button>" +
				'<span data-growl="icon"></span>' +
				'<span data-growl="title"></span><br/>' +
				'<span data-growl="message"></span>' +
				'<a href="javascript:" data-growl="url"></a>' +
				"</div>",
		}
	);
}