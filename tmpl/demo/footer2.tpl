 <style>
     .pa-ta {
         display: grid !important;
         grid-template-columns: repeat(4, 1fr) !important;
     }

     @media (max-width:767px) {
         .pa-ta {
             grid-template-columns: repeat(2, 1fr) !important;
             grid-gap: 20px !important;
         }

         .cfix{
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: flex-start;

         }
     }
 </style>

 <div class="payments">
     <div class="container">
         <ul class="table pa-ta full">
             <li class="tCell middle "><img src="img/payment_2.png" alt="payment"></li>
             <li class="tCell middle "><img src="img/payment_4.png" alt="payment"></li>
             <li class="tCell middle "><img src="img/payment_3.png" alt="payment"></li>
             <li class="tCell middle "><img src="img/payment_6.png" alt="payment"></li>
         </ul>
     </div>
 </div>
 <!----VisualHyip.com Footer---->
 <footer>
     <div class="container">
         <div class="cfix">
             <div class="footCol">
                 <div class="logo invisLink">
                     {include file="vlogo.tpl"}

                     <img src="img/logo.png" alt="logo" width="250" height="50">
                     <a href="?a=home">main</a>
                 </div>

                 <br> <br>
                 <br> <br>

                 {* <p class="copyright">2023 © {$settings.site_name}</p> *}
             </div>
             <ul class="footMenu">
                 <li class="col">
                     <ul>
                         <li><a href="?a=home">HOME</a></li>
                         <li><a href="?a=about">ABOUT US</a></li>


                     </ul>
                 </li>
                 <li class="col">
                     <ul>
                         <li><a href="?a=faq">FAQ</a></li>

                         <li><a href="?a=rules">RULES</a></li>
                         <li><a href="?a=support">CONTACT US</a></li>
                         <li><a href="?a=signup">Sign up</a></li>
                     </ul>
                 </li>
             </ul>
             <div class="footCol">
                 <div class="cont">
                     <span class="title">Address:</span>
                     <p>Sandringham Road Leyton, London, United Kingdom.</p>
                 </div>
                 <div class="cont">
                     <span class="title">E-mail:</span>
                     <a class="link" href="mailto:support@{$settings.site_name}">support@fidelityetrading.com</a>
                 </div>
             </div>
         </div>
         <p style="text-align: center; margin-top:20px;color:white" >2023 © luxwire-investment.online</p>
     </div>
 </footer>
 </div>
 </body>

</html>