function shake(sSelector) {
	
	var $this = $(sSelector);
	
	//var left = $this.position().left > parseInt($this.css('margin-left')) ? $this.position().left : $this.css('margin-left');
	
	$this
		.css({'margin-left': ( $this.width() / 2 ) })
		/*,'margin-bottom': 0*/
		.effect('shake', {
			direction: 'left',
			distance: 10,
			times: 2
		} , 75 , function(){
			$this.css('margin-left',"auto");
		});
	
	return false;
	
}

$( function() {
	
	$.contextMenu( {
		
		selector: '*', 
		
		callback: function(sCmd, oOpts) {
			
			// A big switch for different possible commands.
			
			var $El = oOpts.$trigger,	// Opening element.
				sMsg;
			
			switch (sCmd) {
				
				case "copy":
					
					sMsg = "I feel less special...";
					
					break;
				
				
				case "cut":
					
					sMsg = "Please don't cut me!";
					
					break;
				
				
				case "edit":
					
					sMsg = "No one tells me what to do!";
					
					break;
				
				
				case "paste":
					
					sMsg = "How dare you spew that glue on me.";
					
					break;
				
			}
			
			window.console && console.log(sMsg) || alert(sMsg); 
			
		},
		
		items: {
			
			"edit": {
				icon: "edit",
				name: "Edit"
			},
			
			"cut": {name: "Cut", icon: "cut"},
			"copy": {name: "Copy", icon: "copy"},
			"paste": {name: "Paste", icon: "paste"},
			"delete": {name: "Delete", icon: "delete"},
			"sep1": "---------",
			"quit": {name: "Quit", icon: "quit"}
			
		}
		
	} );
	
	// Figure out how to save current position of widgets.  Should be as simple as going
	// through some event data then using AJAX (to save "forever") or cookies to retain the
	// data.
	
	$("#analog_clock_container").draggable( {
		
		cursor: "-moz-grabbing",
		
		snap: "body, [id^=bar_]",
		
	} ).mousedown( function(event) {
		
		$(this).removeClass("grab").addClass("grabbing");
		
	} ).mouseup( function(event) {
		
		$(this).removeClass("grabbing").addClass("grab");
		
	} );
	
	// Fullscreen on start.
	
	if ($.support.fullscreen) {
		
		var $Btn = $("#full_screen");
		
		$Btn
		 .show()
		 .click( function(e) {
			
			$("body").fullScreen( {
				
				'background'    : '#111',
				'callback'      : function(isFullScreen){
				
				}
				
			} );
			
		} );
		
	}
	
} );