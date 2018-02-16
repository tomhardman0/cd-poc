<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>wheyo</title>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57440172-6', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>

    <button>click me</button>

    <script>
      const button = document.querySelector('button');
      const fieldsObject = {
        'dimension1': 'brand',
        'dimension2': 'username',
        'dimension3': 'environment',
        'dimension4': 'contentType'
      };
      button.addEventListener('click', (e) => {
        e.preventDefault();
        ga('send', 'event', 'category', 'action', 'label', 'value', fieldsObject);
      });
    </script>
  </body>
</html>
