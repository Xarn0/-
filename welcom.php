<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Вход</title>
         <link rel="stylesheet" href="style.css">
</head>
<body>
         <form name="formReg">
                  <div>
                           <input type="name" placeholder="Ваше имя" name="userName" require maxlength="20"><br>
                           <input type="password" placeholder="Ваш пароль" name="password" minlength="8" require ><br>
                           <input type="password" placeholder="Ещё раз пароль" name="password2" minlength="8" require><br>
                           <label class="sex">Ж<input type="radio" name="sex" require></label>
                           <label class="sex">М<input type="radio" name="sex" require></label><br>
                           <input type="submit" value="Зарегистрироваться">
                           <button name="welcom">войти</button>
                  </div>  

         </form>
         
         <script>
                let pass =  document.forms[0].elements.password;
                let pass2 =  document.forms[0].elements.password2;
                   pass2.addEventListener('blur', (event)=>
                   {
                            setInterval(()=>
                            {                if(pass.value == pass2.value && pass.value != '')
                                             {
                                                      
                                                      pass2.classList.remove('error');
                                                      pass2.classList.add('sucess');
                                             } 
                                             else
                                             {
                                                      pass2.classList.add('error');
                                                      pass2.classList.remove('sucess');
                                             } 
                           },100)
                        
                   })       
                
               
            

         </script>
</body>
</html>