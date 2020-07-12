<?php>
$my_obj = new User ('bob');
$other = $my_obj;
//Присваивание (некорректное) объекта переменной - в результате появление двух копий объекта типа (User)

$other = & $my_obj;
//Присваивание (объекта переменной) по ссылке. Переменные $other и $my_obj указывают
// на один и тот же объект. Отличие от некорректного - знак аперсанда "?"

function setSchool( & $school) {
// Передача объекта по ссылке. 
// Параметр $school теперь ссылается на сам объект,
// а не на его копию
}

function & getSchool ( ) {
    // Возвращение объекта по ссылке.
    // Возврат ссылки на объект, а не копии return $this->school
}

class megaquiz_util_Cinf
{
    // Соглашение об именах
}
// Листинг 03.01 Создание класса
class ShopProduct 
{
// Тело класса
}

// Листинг 03.02 Создание объектов типа ShopProduct
$product1 = new ShopProduct ();
$product2 = new ShopProduct ();
$product4 = new ShopProduct ()
// После оператора new указывается имя класса в качестве его единственного операнда.

// Листинг 03.03 вывод оъектов $product1 и $product2 на печать
var_dump ($product1);
var_dump ($product2);

//Листинг 03.04 Определение свойствв в классе 
// (похоже на определение переменной, но + указание вилимости)
class ShopProduct
{
    public $title = "СТандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;
}

//Листинг 03.05 Обращение к переменным свойств с помощью операции '->'
$product1 = new ShopProduct ();
print $product1->title;
