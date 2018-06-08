$(document).ready(function(){
	$("a").click(function(){
		document.getElementById("btnMenu").setAttribute('aria-expanded', 'false');
		$("#btnMenu").addClass("collapsed");
		$("#navBarCollapse").removeClass("show");

		var target = $(this).attr('href');
		$("html, body").stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
        .animate({scrollTop: $(target).offset().top - 60}, 1000 );
	});
});

$(document).ready(function() {

	$(".btnSuppr").click(function(e){
		let lineId = e.target.dataset.id;
		console.log(lineId);
		$("#deleteRow").attr("data-id", lineId);
	});

	
	$('#deleteRow').click(function(e) {
		let lineId = e.target.dataset.id;

		$.post("../php/deleteCourse.php", {delete: lineId}, function(success) {
	    	$(".trPlanning[data-id=" + lineId + "]").remove();
		});
	});
});






