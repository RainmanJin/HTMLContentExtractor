<?php
if(isset($_POST['url'])) {
    set_time_limit( 60 * 10 );
     require_once( 'class.textExtract.php' );
     $iTextExtractor = new textExtract( $_POST['url'] );
     $text = $iTextExtractor->getPlainText();
	 $iTextExtractor->title;
     $iTextExtractor->image;
	 $description = $iTextExtractor->description;
     if( $iTextExtractor->isGB ) 
	 {
		$text = iconv( 'GBK', 'UTF-8//IGNORE', $text );
		$title = iconv( 'GBK', 'UTF-8//IGNORE', $title );
		$description = iconv( 'GBK', 'UTF-8//IGNORE', $description );		 
	 }
	echo $text;
}
?>
