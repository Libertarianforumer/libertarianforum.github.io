<?php 
    $Libertarian = "Libertarian Forum"
?>

<!DOCTYPE html> 

<html>
    <head>
        <meta charset="utf-8"> 
        <title>Join the Libertarian Forum!</title>
        <link rel = "stylesheet" href = "JoinUS.css">
    </head>
    <body>
        <header id = "black_header">

            <a href = "../../LibertarianForum/StartUp/StartUP.html"><img src = "../../Images/Forum.png" alt = "Libertarian Forum" width = "27%" class = "Logo"></a>
            <img src = "../../Images/Button2.png" alt = "Stay informed" id = "big_circle">
            <a target= "_blank" href = "https://twitter.com/LibertariaForum"><img src = "../../Images/Button.png" alt = "Stay informed" width = "1%" id = "small_circle"></a>
            <a target= "_blank" href = "https://twitter.com/LibertariaForum" id = "inform_button">Stay informed!</a>

        </header>
        <main id = "main_helper">
            
            <section>
                <article>
                    <div id = "mottos"><p> Don't Tread On Me!<span style='padding-left:10vw;'> </span> Give Me Liberty Or Give Me Death!<span style='padding-left:10vw;'> </span> Viva La Libertad Carajo!</p></div>
                </article>
            </section>
            
            <section>
                <article id = "menu_container">
                       <div id = "menu_container">
                        <figure id = "genius_menu_container">
                            <img src = "../../Images/Menu.png" width = "19%" class = "libmenu">
                            <figcaption id = "navmenu">
                            
                                <li><a href = "../StartUp/StartUP.html" class = "part_of_menu"> - Start Up</a></li>
                                <li><a href = "../AboutUs/AboutUS.html" class = "part_of_menu"> - About</a></li>
                                <li><a href = "../Workshop/Workshop.html" class = "part_of_menu"> - Workshop</a></li>
                                <li><a href = "../Chainsaw/Chainsaw.html" class = "part_of_menu"> - Chainsaw</a></li>
                                <li><a href = "../JoinUs/JoinUS.php" class = "part_of_menu"> - Join!</a></li>
                        
                                </figcaption>
                        </figure>
                    </div>
                </article>
                <article>
                    <a target="_blank" href="https://app.copyrighted.com/work/ZYLPZiludkKl7wfl"><img src = "../../Images/Jeeper for Liberty.png" width = "60%" id = "illustration"></a>
                </article>
            </section>
                
            <section>
                <article class = "fielder">
                    <h1 class = "sectiontitle">BECOME A MEMBER</h1>
                    <p class = "paragraph">The Libertarian Forum has been founded as an association of Economics and Business students from Maastricht University, sharing libertarian values. For this reason, in case you live in Maastricht, Netherlands, you can become a <strong>Club Member</strong>, participating directly in the association's work, or an <strong>International Member</strong>, getting monthly newsletters and taking part in online discussions. Got hooked? Fill the form below, and the Libertarian Forum will contact you back within 3 working days! </p>
                </article>
                
                <article class = "fielder">
                    <h1 class = "sectiontitle1">CONTACT THE FORUM</h1>
                    <div class = "fieldik">
                    <?php 
                        
                        function has_header_injection($str)
                        {
                            return preg_match("/[\r\n]/", $str);
                        }
                    
                    
                        if (isset ($_POST['contact_submit']))
                        {
                            $name = trim($_POST['name']);
                            $email = trim($_POST['email']);
                            $msg = $_POST['message'];
                            
                            if (has_header_injection($name) || has_header_injection($email))
                        {
                            die();
                        }
                    
                        if (!$name || !$email || !$msg)
                        {
                            echo '<h4 class = "error">All fields required!</h4><a href = "JoinUS.php" class = "buttonblock">Please, go back and try again!</a>';
                            exit;
                        }
                            
                            //$to = "$email";
                            $to = "maaslibertarian@gmail.com";
                            
                            //$subject = "Thank you for subscribing!";
                            $subject = "$name sent you a message via your subscription form";
                            
                            
                            //$message .= "\r\n Thank you for subscribing!";
                            
                            $message = "Name: $name\r\n";
                            $message .= "Email: $email\r\n";
                            $message .= "Message: \r\n$msg";
                            
                            if (isset($_POST['live']) && $_POST['live'] == "Live")
                            {
                                $message .= "\r\n\r\nPlease, add me to the list of Club Members.\r\n";
                            }
                            
                            $message = wordwrap($message, 72);
                            
                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/plain; charset = iso-8859-1\r\n";
                            $headers .= "From: $name <$email> \r\n";
                            $headers .= "X-Priority: 1\r\n";
                            $headers .= "X-MSMail-Priority: High\r\n\r\n";
                            
                            mail($to, $subject, $message, $headers);   
                            
                    ?>
                    
                    <h4 class = "thanks">Thanks for contacting!</h4>
                    <p class = "ask_to_wait">Please, allow 3 working days for a response.</p>
                    
                    <?php } else { ?>
                    
                    <form method ="post" action ="" id = "contact-form">
                      <div id = "boss">  
                        <label for = "name" id = "boom1">Your name:</label><br>
                        <input type ="text" id = "name" name = "name">
                        
                        <br>
                        
                        <label for = "email" id = "boom2">Your email:</label><br>
                        <input type ="email" id = "email" name = "email">
                        
                        <br>
                          
                        <label for = "message">Your message:</label><br>
                          <textarea type ="message" id = "message" name = "message"></textarea>
                          
                        <br>
                          
                        <input type ="checkbox" id = "live" name = "live" value = "Live">
                        <label for = "live" id ="living">I live in Maastricht</label><br>
                          
                        <span style ="line-height = 20px"><br></span>
                        
                        <input type ="submit" class = "buttonnext" name = "contact_submit" value = "SUBMIT">
                            
                        </div>
                    </form>
                    
                    <?php } ?>
                        </div>
                </article>
            </section>
              
        </main>


     <footer id = "black_footer">
            <section>
                <img src = "../../Images/Signature.png" width = "16%" id = "Signature">
                <article>
                    <h2 class = "networking_declaration">Follow the Forum:</h2>
                      
                            <a target= "_blank" href = "https://www.instagram.com/libertarianforum/"><img src = "../../Images/Instagram.png" width = "5%" id = "Insta"></a>
                            <a target= "_blank" href = "https://twitter.com/LibertariaForum"><img src = "../../Images/Twitter.png" width = "5%" id = "Xtwitter"></a>
                   
                </article>
            </section>
        </footer>


        <section>
                <article id = "copyright">
                    <br>
                    <p id = "copyright_itself">&copy;2024 Libertarian Forum | All rights protected </p><br>
                </article>
            </section>
    </body>
</html>