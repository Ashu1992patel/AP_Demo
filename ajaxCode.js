		$(document).ready(function()
			{
				$("button").click(function()
				{
					var name = document.getElementById("name").value;
					var pwd = document.getElementById("password").value;
					var email = document.getElementById("email").value;
					var contact = document.getElementById("contact").value;
					var city = document.getElementById("city").value;
					var company = document.getElementById("company").value;
					
					var data = "name="+name+
					"&password="+pwd+
					"&email="+email+
					"&contact="+contact+
					"&city="+city+
					"&company="+company; 
					
					$.get("insert.php?"+data, function(data, status)
					{
						document.getElementById("result").innerHTML="Insertion completed...";
					});
				});
			});
			
/*		function fun()
		{			
				$('form.form1').on('submit', function()
				{
					var that =$(this),
					url = that.attr('action'),
					method = that.attr('method'),
					data = {};
					
				that.find('[name]').each(function(index, value)
					 {
						var that = $(this),
						name = that.attr('name'),
						value = that. val();
						
						data[name] = value;
					 });
					 
					 $.ajax(
					 {
						 url: url,
						 type: type,
						 data: data,
						 success: function(response)
						 {
							console.log(response); 
						 }
					 });
					 $("#form1").submit(function()
					 {
						 return false;
					 })
					
					return false;
				});
		}
*/