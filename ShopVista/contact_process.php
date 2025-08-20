 <script>
function validate()
{
		var na =fm.name.value;
		var em = fm.email.value;
		var sub = fm.subject.value;
		var mes = fm.message.value;
		
		//=======Name========================================
		var ptr_name = /^([a-zA-Z\ ]){3,15}$/;
		if(na.length == 0)
		{
			document.getElementById("lb_1").innerHTML ="Please Enter your Name";
			document.getElementById("lb_1").style.color= "Red";
			document.getElementById("box_1").style.borderColor = "Red";
		}
		else if(ptr_name.test(na) == false)
		{
			document.getElementById("lb_1").innerHTML ="Invalid Email ID";
			document.getElementById("lb_1").style.color= "Red";
		}
		else if(na.length != 0)
		{
			document.getElementById("lb_1").innerHTML ="✔";
			document.getElementById("lb_1").style.color ="Green";
			document.getElementById("box_1").style.borderColor = "Green";
		}
		//=========Email======================================
		var ptr_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/;
		if(em.length == 0)
		{
			document.getElementById("lb_2").innerHTML ="Please Enter your email";
			document.getElementById("lb_6").style.color= "Red";
			document.getElementById("box_2").style.borderColor = "Red";
		}
		else if(ptr_email.test(em) == false)
		{
			document.getElementById("lb_2").innerHTML ="Invalid Email ID";
			document.getElementById("lb_2").style.color= "Red";
		}
		else if(em.length != 0)
		{
			document.getElementById("lb_2").innerHTML ="✔";
			document.getElementById("lb_2").style.color ="Green";
			document.getElementById("box_2").style.borderColor = "Green";
		}
		//=======Subject========================================
		var ptr_sub = /^([a-zA-Z\ ]){2,500}$/;
		if(sub.length == 0)
		{
			document.getElementById("lb_3").innerHTML ="Please Enter your email";
			document.getElementById("lb_3").style.color= "Red";
			document.getElementById("box_3").style.borderColor = "Red";
		}
		else if(ptr_sub.test(sub) == false)
		{
			document.getElementById("lb_3").innerHTML ="Invalid Email ID";
			document.getElementById("lb_3").style.color= "Red";
		}
		else if(sub.length != 0)
		{
			document.getElementById("lb_3").innerHTML ="✔";
			document.getElementById("lb_3").style.color ="Green";
			document.getElementById("box_3").style.borderColor = "Green";
		}
		//=======Message========================================
			var ptr_mes =  /^([a-zA-Z\ ]){2,500}$/;
		if(mes.length == 0)
		{
			document.getElementById("lb_4").innerHTML ="Please Enter your email";
			document.getElementById("lb_4").style.color= "Red";
			document.getElementById("box_4").style.borderColor = "Red";
		}
		else if(ptr_mes.test(mes) == false)
		{
			document.getElementById("lb_4").innerHTML ="Invalid Email ID";
			document.getElementById("lb_4").style.color= "Red";
		}
		else if(mes.length != 0)
		{
			document.getElementById("lb_4").innerHTML ="✔";
			document.getElementById("lb_4").style.color ="Green";
			document.getElementById("box_4").style.borderColor = "Green";
		}
	if( ptr_name.test(na) == true && ptr_email.test(em) == true && ptr_sub.test(sub) == true && ptr_mes.test(mes) == true )
		{
			alert('Order Placed');window.location='index.php'
		}
}

</script>