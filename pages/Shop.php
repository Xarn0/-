
<body>
      <?php include '../header.php'   ?>
      <div class="menu">
            <div>
                  <ul id="shop_spisok_first">
                              <li>Тип корабля</li>
                              <li>Капитан</li>
                              <li>Название корабля</li>
                  </ul>
                  <div>
                        <div id="shipType">
                              <!-- Сюда тип корабля из базы -->
                                    <h4>Тип корабля</h4>
                                          <div>
                                                <p>Фрегат : Фрега́т — тип военно-морских судов:</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Ка́тер — общее название небольших судов или небольших кораблей военно-морского флота.</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Шху́на — тип парусного судна, имеющего не менее двух мачт и косые паруса на всех мачтах.</p>
                                                <button>купить</button>       
                                          </div>
                        </div>
                        <div id="captain">
                                    <h4>Капитаны</h4>

                                          <div>
                                                <p>Фрегат : Фрега́т — тип военно-морских судов:</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Ка́тер — общее название небольших судов или небольших кораблей военно-морского флота.</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Шху́на — тип парусного судна, имеющего не менее двух мачт и косые паруса на всех мачтах.</p>
                                                <button>купить</button>       
                                          </div>
                        </div>
                        <div id="NameOfTheShip">
                                    <h4>Название корабля</h4>

                                          <div>
                                                <p>Фрегат : Фрега́т — тип военно-морских судов:</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Ка́тер — общее название небольших судов или небольших кораблей военно-морского флота.</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Шху́на — тип парусного судна, имеющего не менее двух мачт и косые паруса на всех мачтах.</p>
                                                <button>купить</button>       
                                          </div>
                        </div>
                        
                  </div>
            </div>
            <div>
                  <ul class="contentFont" id="task_spisok">
                              <li>Легкие</li>
                              <li>Средние</li>
                              <li>Сложные</li>
                  </ul>
                  <div>
                        <div id="Lungs">
                             
                                    <h4>Задание:</h4>
                                          <div>
                                                <p>задание № 21 перевоз с Х до Х</p>
                                                <button>Забрать</button>       
                                          </div>
                                         
                        </div>
                        <div id="Average">
                                    <h4>Задание Средние</h4>

                                          <div>
                                                <p>Фрегат : Фрега́т — тип военно-морских судов:</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Ка́тер — общее название небольших судов или небольших кораблей военно-морского флота.</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Шху́на — тип парусного судна, имеющего не менее двух мачт и косые паруса на всех мачтах.</p>
                                                <button>купить</button>       
                                          </div>
                        </div>
                        <div id="Complex">
                                    <h4>Задание Сложные</h4>

                                          <div>
                                                <p>Фрегат : Фрега́т — тип военно-морских судов:</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Ка́тер — общее название небольших судов или небольших кораблей военно-морского флота.</p>
                                                <button>купить</button>       
                                          </div>
                                          <div>
                                                <p>Шху́на — тип парусного судна, имеющего не менее двух мачт и косые паруса на всех мачтах.</p>
                                                <button>купить</button>       
                                          </div>
                        </div>
                        
                  </div>
            </div>
      </div>
      <script>
            // магазин
       let barShop =  document.getElementById('shop_spisok_first'),
       captain = document.getElementById('captain'),
       shipType = document.getElementById('shipType'),
       NameOfTheShip = document.getElementById('NameOfTheShip');
            // магазин конец     
            // задание
       let task_spisok = document.getElementById('task_spisok'),
       Lungs = document.getElementById('Lungs'),
       Average = document.getElementById('Average'),
       Complex = document.getElementById('Complex');
            //  задание конец
            barShop.addEventListener('click',(event)=>{
              let li = event.target;
              console.log(li.innerHTML)
              if(li.innerHTML == 'Тип корабля'){
                captain.style.display = 'none';
              shipType.style.display = 'block';
              NameOfTheShip.style.display = 'none';
              }
            else if(li.innerHTML == 'Капитан'){
              captain.style.display = 'block';
              shipType.style.display = 'none';
              NameOfTheShip.style.display = 'none';
            }
            else if(li.innerHTML == 'Название корабля'){
              captain.style.display = 'none';
              shipType.style.display = 'none';
              NameOfTheShip.style.display = 'block';
            }
            });


            task_spisok.addEventListener('click',(event)=>
            {
                  let lise = event.target;
                  if(lise.innerHTML == 'Легкие')
                  {
                        Lungs.style.display = 'block';
                        Average.style.display = 'none';
                        Complex.style.display = 'none';  
                  }
                  else if(lise.innerHTML == 'Средние'){
                        Lungs.style.display = 'none';
                        Average.style.display ='block' ;
                        Complex.style.display = 'none'; 
                  }
                  else if(lise.innerHTML == 'Сложные'){
                        Lungs.style.display = 'none';
                        Average.style.display ='none' ;
                        Complex.style.display = 'block'; 
                  }
            })

      </script>
</body>
</html>