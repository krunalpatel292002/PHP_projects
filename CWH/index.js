
function validate(form1)
{
 var reg=/(\w+)\@(\w+)\.[a-zA-Z]/;
 var test_email=reg.test(form1.email.value);
 if(!test_email)
 {
  alert("please enter a valid email");
 }
 else
 {
  alert("valid email address");
 }
}
