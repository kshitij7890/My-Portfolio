
$("form").submit(function(e){
	e.preventDefault();

	var error="";

	if($("#email").val()==""){
		error+="<p><strong>There were error(s) in your input</strong></p><p>Email field is empty.</p>";
	}

	if($("#message").val()==""){
		error+="<p>Message field is empty.</p>";
	}

	if(error!=""){
		$("#error-msg").html('<div class="alert alert-danger" role="alert">'+error+'</div>');
	} else{
		$("form").unbind("submit").submit();
	}
});
