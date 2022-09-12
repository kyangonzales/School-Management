<?php
session_start();
if(!empty($_SESSION['logged_in'])) {
    die(header("Location: ./"));
}
        ?>
<style>
        body{   
                margin: 0;  
                padding: 0;  
                background-color:#25316D;  
                font-family: 'Arial';  
        }.login{  
                width: 350px; 
                height: 200px; 
                overflow: hidden;  
                margin: auto;  
                margin: center;
                padding: 80px;  
                background: #97A895;  
                border-radius: 50px ;  
                
        }label{  
                color: #08ffd1;  
                font-size: 17px;  
        }#Uname{  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 3px;  
                padding-left: 8px;  
        }#Pass{  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 3px;  
                padding-left: 8px;       
        }#log{  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 17px;  
                padding-left: 7px;  
                color: blue;  
        }span{  
                color: white;  
                font-size: 17px;  
        }a{  
                float: right;  
                background-color: grey;  
        }#head{
                font-size:3.5em;
                text-align:center;
                font-family: Cooper Black;
                margin-top: 40px;
                text-align: center;  
                color:#FFDDAA;
                padding: 0px;  
        }#user{
            color:#97D2EC;
        } 

    </style> 
        <!-- <p id = "login" >
        <h1>Login Here</h1>
        <form action="process/login.php" method="POST">
            <label>Username: </label>
            <input type="text" name="username" /><br>
            <label>Password: </label>
            <input type="password" name="password" /><br>
            <button type="submit">Login</button>
        </form>
        </p> -->            
        <body>    
        <h1 id = "head">School Management System</h1> 
            <div class="login">    
            <form action="process/login.php" method="POST">    
                <label id = "user"><b>UserName</b>    
                </label>    
                <input type="text" name="username" id="Uname" placeholder="Username">    
                <br><br>    
                <label id = "user"><b>Password  </b>    
                </label>    
                <input type="Password" name="password" id="Pass" placeholder="Password">    
                <br><br>
                
                <button type="submit" id="log" >Log In Here</button>
                <!-- <input type="button" name="log" id="log" value="Log In Here">        -->
                <br><br>    
                <input type="checkbox" id="check">    
                <span>Remember me</span>    
                <br><br>       
            </form>     
        </div>    
        </body>    
   