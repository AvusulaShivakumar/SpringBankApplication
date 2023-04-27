
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <img src="file:///D:/ecls/ServletsBasicApps/ZZZSpringBootApllicationweb77/src/main/webapp/views/demo2.jpeg" target="error">
     
     <bean id="viewResolver"
    class="org.springframework.web.servlet.view.UrlBasedViewResolver">
    <property name="viewClass"
        value="org.springframework.web.servlet.view.tiles2.TilesView" />
</bean>

<bean id="tilesConfigurer"
    class="org.springframework.web.servlet.view.tiles2.TilesConfigurer">
    
</bean>
</head>
<body style="text-align:center">
<form>
<fieldset>
<h1 style="color:red">Welcome To home page</h1>
   <h1><span><a href="/newaccount">Create Account</a>&nbsp;&nbsp;&nbsp;</span></h1>
    <h1>
<a href="/balance" >view  Balance</a>&nbsp;&nbsp;&nbsp;

<a href="/deposit">Deposit</a>&nbsp;&nbsp;&nbsp;

<a href="/withdraw">withdraw</a>&nbsp;&nbsp;&nbsp;

<a href="/transfer">Transfer</a>&nbsp;&nbsp;&nbsp;

<a href="/close">close Account</a>&nbsp;&nbsp;&nbsp;

<a href="/about">About</a>&nbsp;&nbsp;&nbsp;
</h1>
</fieldset>
</form>
</body>
</html>















