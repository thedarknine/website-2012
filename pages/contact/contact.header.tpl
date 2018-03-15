<link rel="stylesheet" href="libraries/Validation/css/validationEngine.jquery.css" type="text/css"/>
<script src="libraries/Validation/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="libraries/Validation/js/languages/jquery.validationEngine-fr.js" type="text/javascript" charset="utf-8"></script>
<script src="libraries/Validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#contactform").validationEngine();
	});
</script>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<!-- Wrapping the Recaptcha create method in a javascript function -->
<script type="text/javascript">
    function showRecaptcha(element) {
        Recaptcha.create("6LcyE9gSAAAAAJ5xoJK7Tm4rtoJf4GL4_Psx5kmx", element, {
        theme: "clean",
        callback: Recaptcha.focus_response_field});
    }
</script>