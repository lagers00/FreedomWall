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
		postFooter.hide();
		postBox.val("");
		usernameField.val("");
	});

	
})();