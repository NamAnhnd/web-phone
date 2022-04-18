<?php 
 	//Controller su dung de dieu phoi view
 	class Controller{
 		//khai bao bien $fileLayout de luu duong dan cua file template
 		public $fileLayout = NULL;
 		//khai bao bien $view de luu du lieu cua view trong MVC
 		public $view = NULL;
 		public function renderHTML($fileName, $data = NULL){
 			//neu $data khong bang null thi extract du lieu
 			if($data != NULL)
			 // extracct là biến key thành biến và value thành gtri
			//   echo '<pre>';
			// 	print_r($data);
			// 	echo '</pre>';
 				extract($data);
				//  echo '<pre>';
				// print_r($data);
				// echo '</pre>';
			// Hàm file_exists() sẽ kiểm tra xem file hoặc thư mục có tồn tại hay không.
 			//neu ton tai duong dan $fileName thi include no
 			//---
			//doc noi dung cua file $fileName cua view
			if(file_exists($fileName)){				
				//---
				//doc noi dung cua duong dan tai bien $fileName

                // ob_start, ob_get_contents, ob_get_clean là cơ chế cache giúp php chạy nhanh hơn
				ob_start();	//  Tạo một bộ đệm	
				include $fileName;		
				$content = ob_get_contents();//Trả về nội dung của bộ đệm
				ob_get_clean(); //Xóa bộ đệm đầu và xoá tất cả nd của nó
				//gan du lieu vao bien $view
				$this->view = $content;
				//neu duong dan tai bien $fileLayout co ton tai thi xuat template ra, neu khong thi chi xuat view trong MVC
				if($this->fileLayout != NULL && file_exists($this->fileLayout))
					include $this->fileLayout;
				else
					echo $this->view;
				//---
			}
 		}
 		//ham xac thuc dang nhap
 		public function authentication(){
 			if($_SESSION["email"] == NULL)
 				header("location:index.php?area=Backend&controller=Login");
				 
 		}
 	}
 ?>