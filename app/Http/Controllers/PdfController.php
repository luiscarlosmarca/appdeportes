<?php
class IndexController extends BaseController
{
 public function actionIndex()
 {
  $miNombre='http://enlawebdekaaf.blogspot.com/';
 
  $html = '<html><body>'
             . '<p>Blog: '.$miNombre.'</p>'
             . '</body></html>';
 
     return PDF::load($html, 'A4', 'portrait')->show();
 
  //return View::make('index');
 }
}
?>