<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(22, 21, 21)
        }
        nav{
            background-color: #333;
            color: white;
            padding: 10px;
        }
        ul{
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center
        }
        ul li{
            margin-right: 20px;
        }
        ul li a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        ul li a :hover{
            color: #3a703a;
        }
        nav img{
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border: 1px solid white;
            border-radius: 50px;
        }
        .welcomeContainer{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80vh;
            margin: 1rem 2rem;
            wrap: wrap;

        }
        .welcomeContainer h4{
            width: 50%;
            font-size: 1.5rem;
            line-height: 1;
            color: #3a703a
        }
        h1{
            text-align: center;
            margin-top: 1rem;
            font-weight: bold;
            color: #068a06
        }

        </style>
</head>
<body>
    <nav>
        {{-- logo --}}
        <img src="logo.jpg" alt="logo">
        <ul>
           
           <li> <a href="/login">Login</a></li>
           <li> <a href="/register">Register</a></li>

        </ul>
    </nav>

        <main>
            <h1>Welcome to Database Management System Lab</h1>
            <div class="welcomeContainer">
            <h4 >Welcome to our employee website! We are dedicated to
                 providing you with comprehensive and efficient tools 
                 to manage your employee data effortlessly. Our platform 
                 offers a user-friendly interface that allows you to access
                  and update employee information seamlessly. Whether you're a 
                  small business owner, HR manager, or team leader, our website 
                  empowers you to streamline your employee management processes.
                   From viewing detailed employee profiles to tracking departmental
                    information, our platform ensures that you have all the
                     necessary insights at your fingertips. With our commitment
                      to simplicity and reliability, managing your workforce has 
                      never been easier. Join us today and experience the 
                      convenience of modern employee management!</h4>
                <img src="dashboard.png" alt="">
            </div>
            
        </main>
</body>
</html>