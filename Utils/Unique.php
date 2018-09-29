<?php 
namespace Bookstore\Utils;

trait Unique {
	private static $lastid = 0;
	protected $id;

	public function setId($id){
		if ($id == null) {
			$this->id = ++self::$lastid;
		}else{
			$this->id = $id;
		}
		if ($id > self::$lastid) {
			self::$lastid = $id;
		}
	}

		public static function getLastId(){
				return self::$lastid;
			}

		public function getId(){
			return $this->id;
		}
	}



 ?>
