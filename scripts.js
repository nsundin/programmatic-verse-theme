var intro = true;
var scale = 0.25;
var current_width = 0;
var overflow = 0;
var header_offset = 0;
var mobile_menu_open = false;

function resizer() {
	// overview pane
	$("#overview-indicator").css("height", $(window).height()*scale);
	
	var page = $("#pagebody");
	var oc = $("#overview-container");

	header_offset = page.position().top;

	var w = page.width();
	if (w != current_width) {
		//major update
		oc.empty();
		build_overview(page, oc);
		current_width = w;
	}

	var of = page.height()*scale - $(window).height();
	overflow = (of < 0) ? 0 : of;


	// make sure menu is open if expand-tab hidden
	if (($("#expand-tab").css("visibility") == "hidden") && !mobile_menu_open) {
		$("nav ul").css("display", "inline");
	}
	else { //showing mobile menu
		if (!mobile_menu_open) {
			$("nav ul").css("display", "none");
		}
	}
}

function scroll_overview() {
	var corrected_scroll = ($(window).scrollTop()-header_offset);
	var bottom = $("#pagebody").height() - $(window).height();
	var proportion = corrected_scroll/bottom;
	var overview_margin = -overflow * proportion;
	$("#overview-container").css("margin-top", overview_margin);
	$("#overview-indicator").css("margin-top", corrected_scroll*scale + overview_margin);

}

function click_overview(e) {
	var untranslated_y = e.pageY - $(this).offset().top;
	var middle_of_view = untranslated_y/scale - $(window).height()/2 + header_offset;
	$(window).scrollTop(middle_of_view);
	scroll_overview();
}

function click_expand_tab() {
	var m = $("nav ul");
	if (m.is( ":hidden" )) {
    	m.slideDown("slow");
    	mobile_menu_open = true;
    }
    else {
    	m.slideUp("slow");
    	mobile_menu_open = false;
    }
}

function link_events() {
	$("#expand-tab").click(click_expand_tab);
	$(".overview").click(click_overview);
	$(window).scroll(scroll_overview);
	$(window).resize(resizer);
}
function build_overview(page, oc) {

	var ov = $(".overview");
	oc.append(page.html());
	var w = page.width();
	var h = page.height();

	oc.width(w);
	oc.height(h);

	ov.width(scale*w);
	ov.height(scale*h);
}

$(window).load(function() {
	var page = $("#pagebody");
	var oc = $("#overview-container");
	link_events();
	$(window).resize();
	$(document).scroll();
	$(".overview").fadeIn(1000);
});
