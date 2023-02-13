<div align="center">
    <h1>Skilio Web Framework</h1>
    <i>Hi, welcome to my project, hope you will like it !</i> <br />
    <b> > ENJOY < </b>
</div>
<div align="center">
     <h2>Languages used for this project</h2>
     <sub> Web </sub>
     <br />
     <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language">
        <img height="70" alt="HTML" src="https://th.bing.com/th/id/R.36269ef32e1901bd994603c2cb801be1?rik=AHcjqaBm9jncxA&pid=ImgRaw&r=0" />
     </a>
     <a href="https://en.wikipedia.org/wiki/CSS">
        <img height="70" alt="CSS" src="https://www.kindpng.com/picc/m/464-4640184_css3-png-download-css-icon-transparent-png.png" />
     </a>
     <a href="https://www.javascript.com/">
        <img height="70" alt="Javascript" src="https://p7.hiclipart.com/preview/793/545/309/javascript-programmer-node-js-web-application-vector-markup-language.jpg" />
     </a>
     <a href="https://www.php.net/">
        <img height="70" alt="PHP" src="https://th.bing.com/th/id/OIP.bWdhB1dI1fYIYszoMnb_7AAAAA?pid=ImgDet&rs=1" />
     </a>
     <br />
     <sub> Databases </sub>
     <br />
     <a href="https://en.wikipedia.org/wiki/SQL">
        <img height="70" alt="SQL" src="https://img.favpng.com/16/0/21/sql-server-logo-png-favpng-pXyDxFrAFhWQUeLq6SrgeND1g.jpg" />
     </a>
    <br />
    <sub> Libraries </sub>
    <br />
</div>
<div align="center">
    <h2 align="center">Table of Contents</h2>
  
   [What's the project ?](#the-project)   <br>
   [Features](#features)                   <br>
   [Elements to do](#elements-to-do)       <br>
   [Contributors](#contributors)
</div>

<div align="center">
    
   ## <p align="center">The project</p>
   The project consists to create an entire PHP web framework (Skilio)
</div>
   ## <p>Features for futures versions</p>
    - Automatic commands to generate files
    - Basic auto Verifications for a sended form with options
    - Command witch generate automatically the connection and inscription back/front-end
    - Migrations (Generation of complete database)
    - Create a form with a php code in core
    - Simplify checking some elements (like $errors->any)
    - Ressource file with pre-implemented items
        - The role of this ressource file is to pre-create some html element with some specific css :
        Ressource :
        // blue button
        <btnBlue>
            <button class="blue">
                <span> Click me ! </span>
            </button>
        </btnBlue>
        View file Home.skiliox.php :
        <body>
            <header></header>
            <main>
                <h1> Click here </h1>
                <btnBlue>
            </main>
            <footer></footer>
    - Template engine for this framewok :
        - New file extension
        Home.skiliox.php
        - New HTML tags : 
            - Conditions
                - for 
                <for $i = 0; $i < 5; $i++>
                <p> Hello world [ [$i ]]</p>
                </for>
                - foreach
                <foreach $item as $key => $value>
                <p> [[ $key + " => " + $value ]]</p>
                </foreach>
                - forerror
                <for $i = 0; $i < 5; $i++> || <foreach $item as $key => $value>
                <p> [[ $i ]] [[ $key + " => " + $value ]]</p>
                <forerror>
                <p> Error detected // The $value of the item was not set </p>
                </foreach>
                - if
                <if $var == 10>
                <p> The variable is set to 10 </p>
                <elseif $var < 10>
                <p> The variable is under than 10 </p>
                <else>
                <p> The variable is upper than 10 </p>
                </if>
                - while 
                <while $s < 10>
                    <p> [[ $s ]] </p>
                </while>
            - Debug
                - Var dump + pre
                <dump>
                [[ $var1 ]]
                [[ $var2 ]]
                </dump
            - Mentions
                - @include
                @include fileName;
                - 
<div align="center">
   ## <p align="center">Contributors</p>
   <b>
       <a href="https://github.com/dam277">Damien Loup</a>
   </b>                     
   <br>
   <a href="https://dam277.github.io/P_Portfolio/">Portfolio</a>       <br>
   <a href="https://skiliox.com">My main project</a>
   </p>
</div>
