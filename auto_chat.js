$(document).ready(function()
{
	var interval=setInterval(function()
	{
		$.ajax({
			url:'chat.php',
			success:function(data){
				$('#select').html(data);
			}
		});
	}, 1000);
});