	$("#btn-enc").click(function() {
		$("#form-enc").fadeIn("slow");
	});
	$("#btn-admin").click(function() {
		$("#form-admin").fadeIn("slow");
	});
	$("#well1").click(function() {
		$("#well-group1").fadeOut("slow", function() {
			$("#well-group2").fadeIn("slow");
		});
	});
	// $("#well1").click(function() {
	// 	$("#well-group1").animate({left:-1000}, "fast",function() {
	// 		$("#well-group1").fadeOut('fast');
	// 		$("#well-group2").fadeIn('slow');
	// 	});
	// });
	$("#crenc").click(function() {
		$("#well-group2").fadeOut('slow', function() {
			// $("#jumbotron1").animate({height:0}, "fast");
			$("#jumbotron1").fadeOut("fast");
			$("#panel1").fadeIn("slow", function() {
				$("#panel1").animate({height: 500}, "fast");
			});
		});
	});
	$("#btn11").click(function() {
		$(this).fadeOut("slow");
	});
