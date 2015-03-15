(function()	{
	var postBox = $(".postBox");
	var postButton = $(".postButton");
	var postFooter = $(".postFooter");
	var usernameField = $(".username");

	postFooter.hide();

	postBox.focus(function()	{
		postFooter.show();
	});

	postButton.click(function()	{
		var usernameVal = usernameField.val();
		var postVal = postBox.val();

		$.ajax({
			url: "/FreedomWall/index.php/wall/insertPost/"+usernameVal+"/"+postVal,
			success: function()	{
				alert('yes');	
				postBox.val("");
				usernameField.val("");
				postFooter.hide();		
			},
			error: function()	{
				alert('no');
			}
		});
	});	

})();