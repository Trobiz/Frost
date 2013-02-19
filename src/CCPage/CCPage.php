<?php
/**
* A blog controller to display a blog-like list of all content labelled as "post" in the db.
*
* @package FrostCore
*/
class CCPage extends CObject implements IController {

	/**
	* Construct
	*/
	public function __construct() {
		parent::__construct();
	}

	/**
	* Display all content of the type "post".
	*/
	public function Index() {
		$content = new CMContent();
		$this->views->SetTitle('Page');
		$this->views->AddInclude(__DIR__ . '/index.tpl.php', array(
			'content' => null,
		));
	}

	/**
	* Display a page
	*
	* @param $id integer the id of the page.
	*/
	public function View($id=null) {
		$content = new CMContent($id);
		$this->views->SetTitle('Page: ' . htmlEnt($content['title']));
		$this->views->AddInclude(__DIR__ . '/index.tpl.php', array(
			'content' => $content,
			));
	}
}