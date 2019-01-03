<?php 

// $books = array("...", "...", "..." );

$book = array( 
			"Рей Брэдбери"       	  => ["451° по Фаренгейту","Вино из одуванчиков"] ,
			"Грегори Дэвид Робертс"	=> ["Шантарам","Тень горы"],
			"Джордж Оруэлл"      	  =>"1984",
			"Михаил Афанасьевич Булгаков" =>"Мастер и Маргарита",
			"Эрих Мария Ремарк"			=>"Три товарища",
			"Оскар Уайльд"					=>"Портрет Дориана Грея",
			"Даниел Киз"						=>"Цветы для Элджернона",
			"Джером Д. Сэлинджер"		=>"Над пропастью во ржи" ,
			"Антуан де Сент-Экзюпери"=>"Маленький принц",
			"Лев Толстой"						=>"Анна Каренина",
			"Габриэль Гарсиа Маркес"=>"Сто лет одиночества",
			"Айн Рэнд"							=>	"Атлант расправил плечи" 	
			 
			

		);

echo "<ol>";
 

		foreach ($book as $bookAutor => $bookName) {

			if ( is_array($bookName) ) {

				echo "<li>$bookAutor:";

						echo "<ol>";

						foreach ($bookName as $book) {

								echo "<ul>$book</ul>";
						}

						echo "</ol>";

				echo "</li>";

			}	else {
				echo " <li> $bookAutor - $bookName </li>";

			}


					



	}
	echo "</ol>";


// foreach ($key as $value) {
// 	echo "$value <br>";
// }


		 // function & switch case


	echo "<br><br>";

	function greeting( $userName="Гость",$weekDay) {

		switch ($weekDay) {

				case '1':
				case '2':
				case '3':
				case '4':
				case '5':

					echo "Привет, $userName! Хорошего и продуктивного рабочего дня!";
							break;

				case '6':
				case '7':

					echo "Привет, $userName! Желаю вам хорошо отдохнуть в этот день!";
							break;
		
				default:

					echo "Привет, $userName!Наверное,уже пора в отпуск";
							break;
	}


	}


   greeting( "Дмитрий","3");




?>




















