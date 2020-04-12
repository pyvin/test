/*
*  так как ссылка http://www.karoteka.ru не открывается взял новостной ресурс https://vc.ru/
*   получу первое предложение последней новости
*
*/
var select_text = document.querySelector('#page_wrapper > div > div.feed > div.feed__container > div > div:nth-child(1) > div > div.content.content--short > div > p'); // LI
chapter.innerText.split('.')[0];


/*  Задание 2
*   Напишите код, который исполнив в консоли, получим в подвале www.karoteka.ru 
*   (рядом с телефоном) текущее время (обновляемое по секундам) так как на портале vc.com нет подвала 
*   для теста заменю логотип на время
*
*/


setInterval(function() {
    var date = new Date();
    document.querySelector('body > div.main_menu.layout > div.layout__column.layout__column--left.layout__column--unique > div > a.main_menu__logo.l-ml-20.lm-ml-15.l-mr-20.lm-mr-10').innerHTML = date.toLocaleString();
  }, 1000);