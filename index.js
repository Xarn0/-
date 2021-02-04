let spisok_header = document.querySelector('#header_spisok_last');
spisok_header.addEventListener('click',(event)=>{
         let lis = event.target;
         event.preventDefault();
         if(lis.innerHTML == "Магазин")
         {
                  document.querySelector('.menu > div:nth-of-type(1)').style.display = "block";
                  document.querySelector('.menu > div:nth-of-type(2)').style.display = "none";
         }
         else if(lis.innerHTML == "Задание"){
                  document.querySelector('.menu > div:nth-of-type(1)').style.display = "none";
                  document.querySelector('.menu > div:nth-of-type(2)').style.display = "block";
         }
         
})