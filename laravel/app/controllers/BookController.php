<?php


class BookController extends BaseController {
/**
	 * Show the users
	 *
	 * @return void
	 */
	public function insertBooks() {
			DB::table('books')->truncate();
			$books = array(
				array(9781602911727,"Tom Sawyer","Tom goes into a cave with a candle","1807-2-2"),
				array(9780812524581,"Ender's Game","Using children as generals in a war against aliens","1994-1-1"),
				array(9781591843825,"Idea Man: Paul Allen","Memoir of Paul Allen the cofounder of microsoft","2011-4-19"),
				array(9780312084981,"All Creatues Great and Small","Tales of veterernarian in Yorkshire","1973-2-2"),
				array(9788478888566,"Harry Poter and the Sorcerer's Stone","Harry first learns he is a wizard","1997-6-26"),
				array(9780471364139,"Operating Systems Concepts","Overview of operating systems","2012-12-17"),
				array(9781742626260,"The Immortal Life of Henrietta Lacks","The origin of HLacks","2010-6-4"),
				array(9780582186552,"The Hobbit","Story of Bilbo Baggins","1937-9-21"),
				array(9781846145827,"David and Goliath: Underdogs, Misfits, and the Art of Battling Giants","How to rewrite the rules","2013-1-1"),
				array(9780141022048,"Blink: The Power of Thinking Without Thinking","What humans do without realizing it","2005-1-11"),
				array(9780747560722,"Harry Potter and the Chamber of Secrets","Chamber of Secrets","1998-7-2")
				);
				foreach($books as $key=>$book) {
					$new_book= new Book;
					$new_book->ISBN=$book[0];
					$new_book->title=$book[1];
					$new_book->description=$book[2];
					$new_book->date_published=$book[3];
					$new_book->save();

				}
				// DB::insert('insert into books (ISBN,title) values (?,?)', array(2,"Tom Sawyer"));
					// DB::insert('insert into books (ISBN,title,description,date_published) value (?,?,?,?)',array($book[0],$book[1],$book[2],$book[3])); 
				// }
			DB::table('authors')->truncate();
			$authors=array(
					array(1,"Mark","Twain"),
					array(2,"Orson Scott","Card"),
					array(3,"Paul","Allen"),
					array(4,"James","Herriot"),
					array(5,"J.K","Rowling"),
					array(6,"Abraham","Silberschatz"),
					array(7,"Peter","Galvin"),
					array(8,"Greg","Gagne"),
					array(9,"Rebecca","Skloot"),
					array(10,"J.R.R","Tolkien"),
					array(11,"Malcom","Gladwell")
			);
			foreach($authors as $author) {
					$new_author= new Author;
					$new_author->id=$author[0];
					$new_author->first_name=$author[1];
					$new_author->last_name=$author[2];
					$new_author->save();
				}
			DB::table('authored_by')->truncate();
			$authored_by=array(
						array(9781602911727,1),
						array(9780812524581,2),
						array(9781591843825,3),
						array(9780312084981,4),
						array(9788478888566,5),
						array(9780471364139,6),
						array(9780471364139,7),
						array(9780471364139,8),
						array(9781742626260,9),
						array(9780582186552,10),
						array(9781846145827,11),
						array(9780141022048,11),
						array(9780747560722,5)
				);
			foreach ($authored_by as $value) {
					$new_author_by= new AuthoredBy;
					$new_author_by->ISBN=$value[0];
					$new_author_by->id=$value[1];
					$new_author_by->save();
			}


		// $books=array(1=>'b',2=>'c',3=>'d',5=>'g');
		$view=$this->showBooks();
		return $view;
	}
	public function insertThisBook() {


	}
	public function grabBook() {
		$isbn=Input::get('isbn');

		$book=DB::table('books')
							->join('authored_by','books.ISBN','=','authored_by.ISBN')
							->join('authors','authored_by.id','=','authors.id')
							->where('books.isbn','=',$isbn)
							->get();

		return $book;
	}
	public function showBooks()
	{	
		$description=Input::get('description');
		$criteria=Input::get('criteria');
		// 	$description='Tom';
		// $criteria='title';
		
		switch($criteria) {
			case 'title':
				$books=$this->getBooksByTitle($description,'title');
			break;
		   	case 'author':
		   		// return 6;
		   		$books=$this->getBooksByAuthor($description);
		   	break;
			case 'isbn':
				$books=$this->getBooksByIsbn($description);
			break;

		}
		//$books=$this->getBooksFromSearchUsingTitle($description,$search);
		
		return $books;
		// return View::make('books',array('books'=>$books));
	}
	public function getBooksByTitle($description,$search) {
		$books=DB::table('books')
							 ->leftJoin('authored_by','books.ISBN','=','authored_by.ISBN')
							 ->leftJoin('authors','authored_by.id','=','authors.id')
							 ->where('books.'.$search,'LIKE','%'.$description.'%')	
							 ->orderBy('books.title','desc')
							 ->groupBy('books.title')	
							 
							->get();
					return $books;
	}
	public function getBooksByAuthor($description) {
			// $books=DB::table('books')
			// 				->leftJoin('authored_by','books.ISBN','=','authored_by.ISBN')
			// 				->leftJoin('authors','authored_by.id','=','authors.id')
			// 				// ->whereRaw("authors.last_name = ". $description)
			// 				->whereRaw(("authors.first_name || authors.last_name LIKE %?%"), array($description))
			// 				// ->whereRaw("authors.first_name =" $description)
			// 				// ->orWhereRaw("CONCAT(authors.last_name,' ',authors.first_name) LIKE '%".$description."%'")
			// 				// ->orWhereRaw("CONCAT(authors.last_name,',',authors.first_name) LIKE '%".$description."%'")
			// 				// ->groupBy('books.title')
			// 				// ->orderBy('book.title','desc')
			// 				->get();

			$books=DB::select(DB::raw("SELECT * FROM books JOIN authored_by JOIN authors ON books.ISBN = authored_by.ISBN AND authored_by.id = authors.id  WHERE authors.first_name LIKE '%Mark%' "));
					return $books;
	}
	public function getBooksByIsbn($description) {
			$books=DB::table('books')
							->join('authored_by','books.ISBN','=','authored_by.ISBN')
							->join('authors','authored_by.id','=','authors.id')
							->where('books.isbn','=',$description)
							->groupBy('books.title')
							// ->orderBy('book.title','desc')
							->get();
					return $books;

	}

	
}