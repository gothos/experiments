<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script language='JavaScript' type='text/javascript'>
            $( document ).ready(function() {
                
                var a = $('body').children(":first")
                    a.hide()
                    
               
            })
        </script>
    </head>
    <body>
        CAU!!
        <?php
        $to      = 'sebesta.jozef@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        ?>
    </body>
</html>
