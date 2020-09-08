<?php
namespace Org\Util;
class Hits{

		function countvisiter() {
			$arr = explode("/",$_SERVER["PHP_SELF"]);//获取当前文件的位置信息并以"/"分割存入数组中  
        $datfile = $arr[count($arr)-1]."hits.txt";//设置文件位置  
        if(!file_exists($datfile)){//如果文件不存在  
            $cf = fopen($datfile,"w");//建立计数器文件  
            fputs($cf,"0");//初始化值为0  
            fclose($cf);//关闭文件  
        }else{//文件存在则取回计数器里的数据  
            $cf = fopen($datfile,"r");  
            $counter = trim(fgets($cf,10));//读取10个长度的字符  
            fclose($cf);  
        }  
        $counter++;//把计数器自增1  
        $cf = fopen($datfile,"w");//写入新数据  
        fputs($cf,$counter);//将字符$counter写入打开的文件  
        fclose($cf);  
        return $counter;  
		}
}

?>