<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pavel Kurtsev</title>
        <script src="js/jquery.min.js" type="text/javascript" ></script>
    </head>
    <body>
        <?php
        ?>
        <div class="container">
            <div class="jumbotron">
                <h4>OOP Task 5</h4>
                Задача «Программа для МРЭО»<br>
                Задача написать программу для МРЭО. Программа должна высчитывать дорожный налог в зависимости от веса машины и объема двигателя.<br>
                А так же выводить информацию о транспортном средстве (далее ТС).<br>
                Vehicle – имеет характеристики: габариты, вес ТС, вес ТС с полной загрузкой, объем двигателя, вид топлива<br>
                Car – тип коробки передач, количество пассажиров, тип кузова<br>
                Truck – допустимый вес прицепа, количество осей<br>
                Compact – ограничение по пустой массе до 1300кг, 10грн за 0,1л объема двигателя<br>
                Business - ограничение по пустой массе до 1700кг, 15грн за 0,1л объема двигателя<br>
                SUV - ограничение по пустой массе до 2700кг, 20грн за 0,1л объема двигателя<br>
                Light - ограничение по полной массе до 5000кг, 25грн за 0,1л объема двигателя<br>
                Heavy - ограничение по полной массе до 22000кг, 30грн за 0,1л объема двигателя<br>
                Дорожный налог: <объем двигателя>*<цена>+<пустая масса ТС>*0,1грн<br>
                <form name="form1" action="action.php" method="post" role="form" onsubmit="">
                    <input id="submit" type="submit" value="Solve exercise!"/>
                </form>
            </div>
        </div>
    </body>
</html>

