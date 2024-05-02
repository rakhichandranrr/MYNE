<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
  </head>
  <body>
    <form id="demo-form" action="" method="POST">
      <button class="g-recaptcha" data-sitekey="6Lfm4c0pAAAAAEsvY16C_GLiLT_qV8UFQ4uBrV4Z
" data-callback="onSubmit">Submit</button>
      <br/>
    </form>
  </body>
</html>

<style>
.grecaptcha-badge { 
    visibility: hidden;
}
</style>