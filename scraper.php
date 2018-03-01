<?
/*This scraper for Federal Sharait Court of Criminal Cases.
Link :  http://federalshariatcourt.gov.pk/c1.html
Created By Vikash Harjeewan
Date  : 3/1/2018
I added daily schedules for scrape updated data regular
*/

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$totalpages   = 36;


for($page = 0;$page <= $totalpages; $page++)
	{
		$link	=	'http://federalshariatcourt.gov.pk/c$page.html';
		echo "$link\n";
			
	
	}

?>
