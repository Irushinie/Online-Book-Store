function formValidate()
			{
				var CID = document.getElementById("CID").value;
				var Username = document.getElementById("Username").value;
				var password = document.getElementById("txtj").value;
				var NIC = document.getElementById("NIC").value;
				var email = document.getElementById("email").value;
				var city = document.getElementById("Home_no").value;
				var zip = document.getElementById("street").value;
				var state = document.getElementById("City").value;
				var country = document.getElementById("Postcode").value;
				
				
	if(isAlphaNumeric(CID,"CID"))					
		if(isAlphebatic(Username,"Username"))		
			if(passwordValidtion(password))
				if(isAlphaNumericonly(NIC,"NIC"))
					if (emailValidation(email))	
						if(isNumeric(Home_no,"Home_no"))
							if(isAlphebatic(street,"street"))
									if(isAlphebatic(City,"City"))
										if(isNumeric(Postcode,"Postcode"))
											return true;
										else	
											return false;
									else	
										return false;
								
							else
								return false;
						else
							return false;
					else
						return false;
				else
					return false;
			else
				return false;
		else
			return false;
	else
			return false;					
								
							
						
					
															
																													
//			alert(sans);
			}
			
			
	function isEmpty(elemValue,field)
	 {

		if(elemValue =="" || elemValue == null) 
		{

			alert(field + " field cannot be left empty.");

				return true;

		} 
		else
		{
			return false;
		}

	}
	
	
	
	function isAlphebatic(elemValue,field)

	{

		var exp = /^[a-zA-Z ]+$/;

			if (!isEmpty(elemValue, field))
			{

				if (elemValue.match(exp)) 
				{
					return true;
				}
				else 
				{
					alert("Please enter only letters of English Alphabet for the " + field + ".");
					return false;

				}

			}
			else
			{
				return false;
			}
	}
	
	
	
	function isAlphaNumeric(elemValue,field)
	{

			var exp = /^[0-9a-zA-Z ]+$/;

				if (!isEmpty(elemValue, field))
				{
					if (elemValue.match(exp))
					{
						return true;
					}
					else 
					{
						alert("Please enter only alphanumeric characters for the " + field + ".");
						return false;
					}
				}
				else
				{
					return false;
				}

	}
	
	
	
	function isNumeric(elemValue,field)
	{
		if (!isEmpty(elemValue, field))
		{
			var exp = /^[0-9]+$/;
				if (elemValue.match(exp))
				{
					return true;
				}
				else 
				{
					alert("Please enter a valid " + field + " containing only numeric characters, without spaces.");
					return false;
				}
		}
		else
		{
			return false;
		}
	}
	
	
	function selectedFields(elemValue,field) 
	{
		if (elemValue == "select") 
		{
			alert("Choose a " + field);
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	
	function emailValidation(elemValue)
	{
		if (!isEmpty(elemValue, "Email"))
		{
			var atpos = elemValue.indexOf("@");
			var dotpos = elemValue.indexOf(".");
				if (atpos < 1 || dotpos + 2 >= elemValue.length || atpos + 2 > dotpos)
				{
					alert("Please enter a valid email address.");
					return false;
				}
				else
				{
					return true;
				}
		}
		else
		{
			return false;
		}	

	}
	
	function passwordValidtion(elemValue)
{
	if(!isEmpty(elemValue,"Password"))
	{
		var exp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\da-zA-Z])(.{8,15})$/;
		if(elemValue.match(exp))
		{
			return true;
			
		}
		else
		{
			alert("Please enter a password that contains lowercase and uppercase letters, digits and special characters. (Password length must be between 8 to 15 characters).");
			return false;
		}
		
	}
	else
	{
		return false;
	}
}



	
	
function isAlphaNumericonly(elemValue,field)

	{

		var exp = /^[a-zA-Z0-9 ]+$/;

			if (!(elemValue == null) && !(elemValue==""))
			{

				if (elemValue.match(exp)) 
				{
					return true;
				}
				else 
				{
					alert("Please enter only alphanumeric characters for the " + field + ".");
					return false;

				}

			}
			else
			{
				return true;
			}
	}
	
	

	



				
