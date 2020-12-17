function validate()
{
    if(   document.getElementById("text1").value == "Hansi"
       && document.getElementById("text2").value == "Hansi123" )
    {
        alert( "Sign in Success" );
        location.href="Admin,stf,finanhome.php";
    }
    else
    {
        alert( "Incorrect e-mail or password" );
        location.href="BUYBOOKBYCOM.html";
    }
}