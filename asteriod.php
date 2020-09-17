<?php

////get all the info

//ip address
$_ip = $_SERVER['REMOTE_ADDR'];
//end

//host
$_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//end

//browser
$_browser = $_SERVER['HTTP_USER_AGENT'];
//end

//date
$_date = date("r");
//end

////all data have been collected now then we

////make a string to write into file
$_contents = $_ip . "~" . $_host . "~" . $_browser . "~" . $_date . "&";
////end

////enter info into file
$_filename = "logfile.html";
$_handle = fopen($_filename, 'a');
////if the file doesnt exist, script create it and chmod it 777 so we can write on it
@chmod("logfile.html", 0777);
@fwrite($_handle, $_contents);
fclose($_handle);
////end


?>


<?php

////open the log file

$_filename = "logfile.html";
$_handle = fopen($_filename, "r");
$_contents = fread($_handle, filesize($_filename));
fclose($_handle);

////end

////end

////print out the data
echo "c2kgcHVlZGVzIGRlY2lmcmFyIGVzdG8gZmVsaWNpZGFkZXM=";
////end
////end

?>